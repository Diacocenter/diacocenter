<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LanguageSeeder::class,
            RegionSeeder::class,
            CountrySeeder::class,
            SocialMediaSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ArticleSeeder::class,
            NewsSeeder::class,
            AgreementSeeder::class,
            ProjectSeeder::class,
            CommunicationSeeder::class
        ]);
    }
}
