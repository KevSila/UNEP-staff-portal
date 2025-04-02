<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert default data for languages, only if it doesn't already exist
        Language::firstOrCreate(['name' => 'English']);
        Language::firstOrCreate(['name' => 'French']);
        Language::firstOrCreate(['name' => 'Spanish']);
        Language::firstOrCreate(['name' => 'German']);
        Language::firstOrCreate(['name' => 'Chinese']);
        Language::firstOrCreate(['name' => 'Arabic']);
    }
}
