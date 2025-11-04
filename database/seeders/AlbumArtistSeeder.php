<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album_Artist;

class AlbumArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Album_Artist::updateOrCreate(
            [
            'Artist_id' => 1, 
            'Albums_id' => 1,
            ]
        );
    }
}
