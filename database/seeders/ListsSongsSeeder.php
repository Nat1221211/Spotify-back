<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ListSong;

class ListsSongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'playlist_id' => 1,
            'song_id' => 1,  
            ],
            [
            'playlist_id' => 1,
            'song_id' => 2,  
            ],
            [
            'playlist_id' => 1,
            'song_id' => 3,  
            ],
            [
            'playlist_id' => 1,
            'song_id' => 4,  
            ],
            ];
        foreach($values as $value) {
            ListSong::updateOrCreate(
               $value
            );
        }
        
    }
}
