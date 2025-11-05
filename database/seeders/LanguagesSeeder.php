<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $values = [
            [
            'idioma' => 'English',  
            ],
            [
            'idioma' => 'Catalan',  
            ],
            [
            'idioma' => 'Spanish',  
            ],
            [
            'idioma' => 'Japanese',  
            ],
            ];
            
        foreach($values as $value) {
            Language::updateOrCreate(
               $value
            );
        }
    }
}
