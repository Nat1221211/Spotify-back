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
            'Lists_id' => 1,
            'Songs_id' => 1,  
            ],
            [
            'Lists_id' => 1,
            'Songs_id' => 2,  
            ],
            [
            'Lists_id' => 1,
            'Songs_id' => 3,  
            ],
            [
            'Lists_id' => 1,
            'Songs_id' => 4,  
            ],
            ];
        foreach($values as $value) {
            Lists_Songs::updateOrCreate(
               $value
            );
        }
        
    }
}
