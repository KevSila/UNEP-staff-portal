<?php

namespace App\Http\Controllers;

use App\Models\Staff; // Import the Staff model
use App\Models\EducationLevel; // Import the EducationLevel model
use App\Models\DutyStation; // Import the DutyStation model
use Illuminate\Http\Request;

class StaffController extends Controller
{
    // Show form for creating a new staff member
   public function create()
{
    // Get all education levels and duty stations from the database
    $educationLevels = EducationLevel::all();  // Retrieves all education levels
    $dutyStations = DutyStation::all();  // Retrieves all duty stations

    // Pass the data to the view
    return view('staff.create', compact('educationLevels', 'dutyStations'));
}


    // Store new staff in the database
    public function store(Request $request)
    {
        $request->validate([
            'index_number' => 'required',
            'full_names' => 'required',
            'email' => 'required|email',
            'current_location' => 'required',
            'highest_level_of_education' => 'required',
            'duty_station' => 'required',
            'availability_for_remote_work' => 'required|boolean',
            'software_expertise' => 'required',
            'software_expertise_level' => 'required',
            'language' => 'required',
            'level_of_responsibility' => 'required',
        ]);

        Staff::create($request->all());

        return redirect()->route('staff.index');
    }

    // Show list of all staff
    public function index()
    {
        $staff = Staff::all();
        return view('staff.index', compact('staff'));
    }

    // Show form for editing a staff member
    public function edit(Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    // Update a staff member in the database
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'index_number' => 'required',
            'full_names' => 'required',
            'email' => 'required|email',
            'current_location' => 'required',
            'highest_level_of_education' => 'required',
            'duty_station' => 'required',
            'availability_for_remote_work' => 'required|boolean',
            'software_expertise' => 'required',
            'software_expertise_level' => 'required',
            'language' => 'required',
            'level_of_responsibility' => 'required',
        ]);

        $staff->update($request->all());

        return redirect()->route('staff.index');
    }

    // Delete a staff member from the database
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
