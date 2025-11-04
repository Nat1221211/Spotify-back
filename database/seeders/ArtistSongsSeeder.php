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
            'Artist_id' => 1,
            'Songs_id' => 1,  
            ],
            [
            'Artist_id' => 1,
            'Songs_id' => 2,  
            ],
            [
            'Artist_id' => 1,
            'Songs_id' => 3,  
            ],
            [
            'Artist_id' => 1,
            'Songs_id' => 4,  
            ],
            ];
            
        foreach($values as $value) {
            Artist_songs::updateOrCreate(
               $value
            );
        }
    }
}
