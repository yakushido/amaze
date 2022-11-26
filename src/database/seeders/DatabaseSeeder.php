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
            CategoriesTableSeeder::class,
            UsersTableSeeder::class,

            ShopImagesTableSeeder::class,

            EyelashGenresTableSeeder::class,
            EyelashesTableSeeder::class,

            DepilationGenresTableSeeder::class,
            DepilationPartsTableSeeder::class,
            DepilationsTableSeeder::class,
            DepilationSDetailsTableSeeder::class,
            DepilationLDetailsTableSeeder::class,

            EstheticGenresTableSeeder::class,
            EstheticPartsTableSeeder::class,
            EstheticsTableSeeder::class,

            WormwoodGenresTableSeeder::class,
            WormwoodsTableSeeder::class,

            BridalGenresTableSeeder::class,
            BridalPartsTableSeeder::class,
            BridalsTableSeeder::class,

            NailGenresTableSeeder::class,
            NailsTableSeeder::class,
        
            GendersTableSeeder::class,
            CampaignsTableSeeder::class
        ]);
    }
}
