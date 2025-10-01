<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Albums;

class AlbumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Albums::updateOrCreate(
            [
            'nom'  => 'Sample Songs',
            'quantitat' => 4,
            'data' => '31/09/2025',
            'logo_img' => '',
            ]
        );
    }
}
