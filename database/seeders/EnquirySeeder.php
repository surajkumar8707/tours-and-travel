<?php

namespace Database\Seeders;

use App\Models\Enquiry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnquirySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Enquiry::create([
            'name' => 'Test Name',
            'email' => 'test@example.com',
            'phone' => '9632587415',
            'message' => 'This is Message',
        ]);
    }
}
