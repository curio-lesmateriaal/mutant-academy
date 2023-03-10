<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Superhuman;
use App\Models\Mission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\Universe::create([
            'name' => 'Marvel',
        ]);

        \App\Models\Universe::create([
            'name' => 'DC',
        ]);

        \App\Models\Universe::create([
            'name' => 'Star Wars',
        ]);

        \App\Models\Type::create([
            'name' => 'Mutant',
        ]);

        \App\Models\Type::create([
            'name' => 'Alien',
        ]);

        \App\Models\Type::create([
            'name' => 'Human',
        ]);

        Superhuman::factory(100)->create();
        Mission::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


    }
}
