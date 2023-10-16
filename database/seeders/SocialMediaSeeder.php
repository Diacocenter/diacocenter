<?php

namespace Database\Seeders;

use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' =>  'Instagram',
                'path' => 'https://instagram.com',
                'icon' => 'instagram.png',
            ],
            [
                'title' =>  'Twitter',
                'path' => 'https://twitter.com',
                'icon' => 'x.png',
            ],
            [
                'title' =>  'Linkedin',
                'path' => 'https://linkedin.com',
                'icon' => 'linkedin.png',
            ],
            [
                'title' =>  'Facebook',
                'path' => 'https://Facebook.com',
                'icon' => 'facebook.png',
            ],
        ];

        SocialMedia::insert($items);
    }
}
