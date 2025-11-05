<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
             'nom' => 'Sample 1',
             'durada' => '2.35',
             'album_id' => '1',
             'views' => '1000',
             'data' => '2025-09-30',
             'genre_id' => '1',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 2',
             'durada' => '2.52',
             'album_id' => '1',
             'views' => '1000',
             'data' => '2025-09-30',
             'genre_id' => '1',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 3',
             'durada' => '2.25',
             'album_id' => '1',
             'views' => '1000',
             'data' => '2025-09-30',
             'genre_id' => '2',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 4',
             'durada' => '2.55',
             'album_id' => '1',
             'views' => '1000',
             'data' => '2025-09-30',
             'genre_id' => '3',
             'tipus' => 'Song',
            ],
            ];
        
        foreach ($values as $song) {
            Song::updateOrCreate(
                $song
            );
        }
            
    }
}
