<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
=======
>>>>>>> fae381b1f1282d56b8e2db036de8135d03b0a7df
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> fae381b1f1282d56b8e2db036de8135d03b0a7df
    }
}
