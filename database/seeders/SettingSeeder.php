<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Travel adventure safari',
            'email' => 'corbett@gmail.com',
            'whatsapp' => '+91 8707633860',
            'contact' => '+91 8707633860',
            'address' => 'Corbett',
            'header_image' => 'assets/front/images/logo.png',
        ]);
    }
}
