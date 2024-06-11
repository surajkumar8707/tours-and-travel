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
            'email' => 'info@traveljimcorbett.in',
            'whatsapp' => '+91 8864927248',
            'contact' => '+91 8864927248',
            'address' => 'Sunni Gosiya Masjid, Building of SMT Farjana Near Star Plywood <br>
                            Kadimi Masjid Road, Gullarghatti <br>
                            Ramnagar, Nainital, Uttarakhand, 244715.',
            'header_image' => 'assets/front/images/logo.png',
        ]);
    }
}
