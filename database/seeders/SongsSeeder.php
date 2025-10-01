<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Songs;

class SongsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Songs::updateOrCreate(
            [
             'nom' => 'Sample 1',
             'durada' => '2.35',
             'id_album' => '1',
             'views' => '1000',
             'data' => '31/09/2025',
             'id_genere' => '1',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 2',
             'durada' => '2.52',
             'id_album' => '1',
             'views' => '1000',
             'data' => '31/09/2025',
             'id_genere' => '1',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 3',
             'durada' => '2.25',
             'id_album' => '1',
             'views' => '1000',
             'data' => '31/09/2025',
             'id_genere' => '1',
             'tipus' => 'Song',
            ],
            [
             'nom' => 'Sample 4',
             'durada' => '2.55',
             'id_album' => '1',
             'views' => '1000',
             'data' => '31/09/2025',
             'id_genere' => '1',
             'tipus' => 'Song',
            ]
        );
    }
}
