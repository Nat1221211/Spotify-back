<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
             'nom' => 'Samples',
            ],
            [
             'nom' => 'Samples 2',
            ],
            [
             'nom' => 'Samples 3',
            ],
            ];

        foreach ($values as $genre) {
            Genre::updateOrCreate(
                $genre
            );
        }
    }
}
