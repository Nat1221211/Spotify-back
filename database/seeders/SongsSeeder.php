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
             'nom' => '',
             'durada' => '',
             'id_album' => '',
             'views' => '',
             'data' => '',
             'id_genere' => '',
             'tipus' => '',
             'logo_img' => '',
             'background_img' => '',
            ]
        );
    }
}
