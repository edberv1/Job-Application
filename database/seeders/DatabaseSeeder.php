<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Roles::factory(3)->create();

        // Roles::factory()->create(['role' => 'Admin']);
        // Roles::factory()->create(['role' => 'Employee']);
        // Roles::factory()->create(['role' => 'Employer']);

        // Roles::create([
        //     'role' => 'Admin'
        // ]);
        
        // Roles::create([
        //     'role' => 'Employee'
        // ]);

        // Roles::create([
        //     'role' => 'Employer'
        // ]);

       
    }


}
