<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EducationLevel extends Model
{
    // Table name (Laravel will assume it's 'education_levels' by default, but let's specify it here for clarity)
    protected $table = 'education_levels';

    // Mass assignable attributes (adjust based on your columns)
    protected $fillable = ['level_name'];

    // Relationships
    public function staff()
    {
        return $this->hasMany(Staff::class, 'highest_level_of_education');
    }
}
