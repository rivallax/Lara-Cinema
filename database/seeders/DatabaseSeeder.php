<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        user::create([
            'name' => 'rivaldi akbar',
            'email' => 'rivaldiakbar@gmail.com',
            'password' => bcrypt('654321'),
        ]);
        user::create([
            'name' => 'elgin al-wafi dauliyah',
            'email' => 'elginwafi@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        user::create([
            'name' => 'deden ahmad jamil',
            'email' => 'deden@gmail.com',
            'password' => bcrypt('131106'),
        ]);
    }
}
