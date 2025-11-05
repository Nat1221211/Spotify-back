<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArtistSong;

class ArtistSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'artist_id' => 1,
            'song_id' => 1,  
            ],
            [
            'artist_id' => 1,
            'song_id' => 2,  
            ],
            [
            'artist_id' => 1,
            'song_id' => 3,  
            ],
            [
            'artist_id' => 1,
            'song_id' => 4,  
            ],
            ];
            
        foreach($values as $value) {
            ArtistSong::updateOrCreate(
               $value
            );
        }
    }
}
