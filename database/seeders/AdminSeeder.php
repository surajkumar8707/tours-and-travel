<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        User::truncate();

        $admins = collect([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => 'admin@123',
            ],
        ]);

        $admins->each(function($admin){
            $exist = User::where('email', $admin['email'])->first();
            if(empty($exist)){
                User::firstOrCreate([
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'password' => bcrypt($admin['password']),
                ]);
            }
        });
    }
}
