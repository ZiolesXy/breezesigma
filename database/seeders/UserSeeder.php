<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Pasha Prabasakti',
            'username' => 'pasha',
            'email' => 'pashaprabasakti@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678')
        ]);
        
        User::factory(5)->create();
    }
}
