<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EducationLevel;

class EducationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert default data for Education Levels
        EducationLevel::create(['name' => 'High School']);
        EducationLevel::create(['name' => 'Associate Degree']);
        EducationLevel::create(['name' => 'Bachelor\'s Degree']);
        EducationLevel::create(['name' => 'Master\'s Degree']);
        EducationLevel::create(['name' => 'Doctorate']);
    }
}
