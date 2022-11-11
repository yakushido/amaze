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
            EyelashCategoriesTableSeeder::class,
            EyelashCoursesTableSeeder::class,
            EyelashesTableSeeder::class,
            EyelashCommentsTableSeeder::class,
            EyelashLimitsTableSeeder::class,
            EyalashImagesTableSeeder::class
        ]);
    }
}
