<?php

namespace Database\Seeders;

use App\Models\SoftwareExpertise;
use Illuminate\Database\Seeder;

class SoftwareExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $softwareExpertises = [
            'Microsoft Office',
            'Adobe Photoshop',
            'AutoCAD',
            'Microsoft Excel',
            // Add more software expertise values as needed
        ];

        foreach ($softwareExpertises as $expertise) {
            // Check if the software expertise already exists before inserting
            SoftwareExpertise::firstOrCreate(['name' => $expertise]);
        }
    }
}
