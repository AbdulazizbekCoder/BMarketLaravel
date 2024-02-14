<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Admin',
             'phone' => 946544353,
             'email' => 'test@example.com',
             'role' => User::role['admin'],
             'password' =>  Hash::make('12345678'),
             'remember_token' => Str::random(10),
         ]);
//         \App\Models\User::factory()->create([
//             'name' => 'Client',
//             'phone' => 9412345678,
//             'email' => 'client@example.com',
//             'password' =>  Hash::make('12345678'),
//             'remember_token' => Str::random(10),
//         ]);
    }
}
