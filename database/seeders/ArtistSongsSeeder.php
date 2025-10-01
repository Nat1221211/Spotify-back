<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist_songs;

class ArtistSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'id_artista' => 1,
            'id_songs' => 1,  
            ],
            [
            'id_artista' => 1,
            'id_songs' => 2,  
            ],
            [
            'id_artista' => 1,
            'id_songs' => 3,  
            ],
            [
            'id_artista' => 1,
            'id_songs' => 4,  
            ],
            ];
            
        foreach($values as $value) {
            Artist_songs::updateOrCreate(
               $value
            );
        }
    }
}
