<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                "title"     =>  "English",
                "slug"      =>  "en",
                "preferred_currencies"   =>  [ 1, 2, 3 ]
            ],
            [
                "title"     =>  "French",
                "slug"      =>  "fr",
                "preferred_currencies"   =>  [ 2, 3 ]
            ],
            [
                "title"     =>  "Persian",
                "slug"      =>  "fa",
                "preferred_currencies"   =>  [ 4, 1 ]
            ]
        ];

//        Language::insert($items);
        foreach ($items as $item) {
            Language::query()->create($item);
        }
    }
}
