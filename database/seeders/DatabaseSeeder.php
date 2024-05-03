<?php

namespace Database\Seeders;

use App\Models\Greeting;
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
        Greeting::factory(10)->create();

        // Greeting::factory()->create([
        //     'name' => 'Test User',
        //     'relation' => 'saudara jauh',
        //     'message' => "Assalamu'alaikum",
        // ]);
    }
}
