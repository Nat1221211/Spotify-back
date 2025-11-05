<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'nom'  => 'Sample Songs',
            'quantitat' => 4,
            'data' => '2025-09-30',
            ],
            [
            'nom'  => 'Sample Songs',
            'quantitat' => 4,
            'data' => '2025-09-30',
            ],
            [
            'nom'  => 'Sample Songs',
            'quantitat' => 4,
            'data' => '2025-09-30',
            ],
            [
            'nom'  => 'Sample Songs',
            'quantitat' => 4,
            'data' => '2025-09-30',
            ],
            ];
            
        foreach($values as $album) {
            Album::updateOrCreate(
               $album
            );
        }
    }
}
