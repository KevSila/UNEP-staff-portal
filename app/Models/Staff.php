<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    // Table name
    protected $table = 'staff';

    // Mass assignable attributes
    protected $fillable = [
        'index_number',
        'full_names',
        'email',
        'current_location',
        'highest_level_of_education',
        'duty_station',
        'availability_for_remote_work',
        'software_expertise',
        'software_expertise_level',
        'language',
        'level_of_responsibility',
    ];

    // Relationships
    public function educationLevel()
    {
        return $this->belongsTo(EducationLevel::class, 'highest_level_of_education');
    }

    public function dutyStation()
    {
        return $this->belongsTo(DutyStation::class, 'duty_station');
    }
}
