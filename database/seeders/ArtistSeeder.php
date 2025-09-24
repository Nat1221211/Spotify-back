<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artist::updateOrCreate(
            [
            'nom_artistic' => 'The Sample Band',
            'nacionalitat' => 'Español',
            'id_idioma' => 1,
            'data_naixement' => '2020-06-20',
            'seguidors' => '2000',
            ]
        );
    }
}
