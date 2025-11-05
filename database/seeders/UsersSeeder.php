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
        $values = [
            [
            'nom' => 'User 1',
            'cognom' => 'User',
            'pais' => 'Userland',
            'seguidors' => 10,
            'email' => 'user@gmail.com',
            'password' => 'user123456789',  
            ],
            [
            'nom' => 'User 2',
            'cognom' => 'Carrera',
            'pais' => 'Catalonia',
            'seguidors' => 100,
            'email' => 'carrera@gmail.com',
            'password' => 'carrera123456789',  
            ],
            [
            'nom' => 'User 3',
            'cognom' => 'Puig',
            'pais' => 'Spain',
            'seguidors' => 1000,
            'email' => 'puig@gmail.com',
            'password' => 'puig123456789',  
            ],
            [
            'nom' => 'User 4',
            'cognom' => 'Serarols',
            'pais' => 'England',
            'seguidors' => 10000,
            'email' => 'serarols@gmail.com',
            'password' => 'serarols123456789',  
            ],
            ];
            
        foreach($values as $value) {
            User::updateOrCreate(
               $value
            );
        }
    }
}