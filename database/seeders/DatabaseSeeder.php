<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Language;  // Import Language model
use App\Models\SoftwareExpertise;  // Import SoftwareExpertise model
use App\Models\EducationLevel;  // Import EducationLevel model
use App\Models\DutyStation;  // Import DutyStation model
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the individual seeders to populate data for different tables

        $this->call(LanguageSeeder::class);  // Seed data for languages
        $this->call(SoftwareExpertiseSeeder::class);  // Seed data for software expertise
        $this->call(EducationLevelSeeder::class);  // Seed data for education levels
        $this->call(DutyStationSeeder::class);  // Seed data for duty stations

        // Create 10 test users using factory
        User::factory(10)->create();
    }
}
