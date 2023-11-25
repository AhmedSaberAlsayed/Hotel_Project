<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.comm',
            'mobile' => '01125096548',
        ]);
        \App\Models\User_Role::create([
            'role_type' => 'employee',
            'user_id' => 2
            
        ]);
    }
}
