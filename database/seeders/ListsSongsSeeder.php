<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lists_Songs;

class ListsSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lists_Songs::updateOrCreate(
            [
            'id_list' => 1,
            'id_song' => 1,  
            ],
            [
            'id_list' => 1,
            'id_song' => 2,  
            ],
            [
            'id_list' => 1,
            'id_song' => 3,  
            ],
            [
            'id_list' => 1,
            'id_song' => 4,  
            ]
        );
    }
}
