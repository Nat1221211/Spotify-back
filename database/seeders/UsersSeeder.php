<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            [
            'nom' => 'User 1',
            'cognom' => 'User',
            'pais' => 'Userland',
            'profile_img' => '',
            'seguidors' => 10,
            'email' => 'user@gmail.com',
            'email_verified_at' => 'google',
            'password' => 'user123456789',
            ]
        );
    }
}