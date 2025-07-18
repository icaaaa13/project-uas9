<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'admin garuda',
            'email' => 'admin123@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::where('email', 'admin@gmail.com')->first()->update([
        //     "password" => bcrypt('admin123'),
        // ]);
    }
}
