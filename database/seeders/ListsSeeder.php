<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PlayList;

class ListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'nom' => 'List 1',
            'user_id' => 1,  
            ],
            [
            'nom' => 'List 2',
            'user_id' => 2,  
            ],
            [
            'nom' => 'List 3',
            'user_id' => 3,  
            ],
            [
            'nom' => 'List 4',
            'user_id' => 4,  
            ],
            ];
            
        foreach($values as $value) {
            PlayList::updateOrCreate(
               $value
            );
        }
    }
}
