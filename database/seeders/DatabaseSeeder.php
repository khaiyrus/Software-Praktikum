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
            'name' => 'virus',
            'role' => 'admin',
            'email' => 'virus@admin.com',
            'password' => '12345678',
        ]);
        // User::factory()->create([
        //     'name' => 'fikri',
        //     'role' => 'panitia',
        //     'email' => 'fikri@panitia.com',
        //     'password' => '12345678',
        // ]);
        // User::factory()->create([
        //     'name' => 'diva',
        //     'role' => 'kandidat',
        //     'email' => 'diva@kandidat.com',
        //     'password' => '12345678',
        // ]);
    }
}
