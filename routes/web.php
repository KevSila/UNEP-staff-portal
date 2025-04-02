<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

// Route for showing the staff create form
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');

// Route for storing the new staff in the database
Route::post('/staff', [StaffController::class, 'store'])->name('staff.store');

// Route for showing the staff listing page
Route::get('/staff', [StaffController::class, 'index'])->name('staff.index');

// Route for editing a staff member
Route::get('/staff/{staff}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::get('/staff/create', [StaffController::class, 'create'])->name('staff.create');


// Route for updating the staff member's details
Route::put('/staff/{staff}', [StaffController::class, 'update'])->name('staff.update');

// Route for deleting a staff member
Route::delete('/staff/{staff}', [StaffController::class, 'destroy'])->name('staff.destroy');
