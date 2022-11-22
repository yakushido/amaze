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
            EyelashAsTableSeeder::class,
            EyelashBsTableSeeder::class,
            EyelashCsTableSeeder::class,
            EyelashDsTableSeeder::class,

            DepilationGenresTableSeeder::class,
            DepilationPartsTableSeeder::class,
            DepilationAsTableSeeder::class,
            DepilationBsTableSeeder::class,
            DepilationCsTableSeeder::class,
            DepilationSDetailsTableSeeder::class,
            DepilationLDetailsTableSeeder::class,

            EstheticGenresTableSeeder::class,
            EstheticPartsTableSeeder::class,
            EstheticAsTableSeeder::class,
            EstheticBsTableSeeder::class,
            EstheticCsTableSeeder::class,
            EstheticDsTableSeeder::class,

            WormwoodGenresTableSeeder::class,
            WormwoodAsTableSeeder::class,

            BridalGenresTableSeeder::class,
            BridalAsTableSeeder::class,
            BridalBsTableSeeder::class,
            BridalCsTableSeeder::class,
            BridalDsTableSeeder::class,

            NailGenresTableSeeder::class,
            NailAsTableSeeder::class,
            NailBsTableSeeder::class,
            NailCsTableSeeder::class,
            NailDsTableSeeder::class,
        
            GendersTableSeeder::class,
            CampaignsTableSeeder::class
        ]);
    }
}
