<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\HomePageCarousel;

class HomePageCarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        HomePageCarousel::truncate();

        $default_carousels = array(
            [
                'title' => 'Dhikala Tiger Tracing Tour in Jim Corbett National Park',
                'image' => "assets/front/images/slider/slid_2.jpg",
                'status' => 1,
            ],

            [
                'title' => 'Corbett Resort in Jim Corbett National Park',
                'image' => "assets/front/images/slider/slid_1.jpg",
                'status' => 1,
            ],
        );

        if(count($default_carousels) > 0){
            foreach($default_carousels as $carousel){
                HomePageCarousel::create(array(
                    'title' => $carousel['title'],
                    'image' => $carousel['image'],
                    'status' => $carousel['status'],
                ));
            }
        }
    }
}
