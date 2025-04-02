<?php

namespace Database\Seeders;

use App\Models\DutyStation;
use Illuminate\Database\Seeder;

class DutyStationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dutyStations = [
            'Nairobi',
            'Mombasa',
            'Kisumu',
            'Nakuru',
            'Eldoret',
            // Add more duty station values as needed
        ];

        foreach ($dutyStations as $station) {
            DutyStation::firstOrCreate(['station_name' => $station]);
        }
    }
}
