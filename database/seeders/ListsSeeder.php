<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lists;

class ListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lists::updateOrCreate(
            [
            'nom' => 'List 1',
            'User_id' => 1,
            ]
        );
    }
}
