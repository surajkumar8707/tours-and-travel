<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SocialMediaLink;

class SocialMediaLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        SocialMediaLink::truncate();

        // Seed new data
        SocialMediaLink::create([
            'youTube' => 'https://www.youtube.com/',
            'instagram' => 'https://www.instagram.com/',
            'facebook' => 'https://www.facebook.com/',
            'linkedin' => 'https://www.linkedin.com/',
            'twitter' => 'https://twitter.com/',
        ]);
    }
}
