<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GendersTableSeeder::class,
            GenresTableSeeder::class,
            CategoriesTableSeeder::class,
            PartsTableSeeder::class,
            MenusTableSeeder::class,
            
            CampaignsTableSeeder::class,

            UsersTableSeeder::class,

            PartDetailsTableSeeder::class,

            GalleryCategoriesTableSeeder::class,
            GalleriesTableSeeder::class,

        ]);
    }
}
