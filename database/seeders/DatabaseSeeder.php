<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create a test user for login
        User::create([
            'name' => 'Test User',
            'email' => 'student@campus.com',
            'password' => Hash::make('password123'),
        ]);
    }
}
