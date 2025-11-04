<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AlbumArtist;

class AlbumArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlbumArtist::updateOrCreate(
            [
            'artist_id' => 1, 
            'album_id' => 1,
            ]
        );
    }
}
