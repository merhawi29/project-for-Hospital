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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Appointment::factory()->create([
            'name' =>  fake()->name()
            ,'email' => fake()->unique()->safeEmail()
            ,'phone' => fake()->phoneNumber()
            ,'doctor' => fake()->name()
            ,'message'=> fake()->paragraph()
            ,'user_id'=>\App\Models\User::factory()
        ]);
    }

}
