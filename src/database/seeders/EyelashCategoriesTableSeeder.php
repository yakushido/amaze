<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_categories')->insert([
            [
                'id' => 1,
                'name' => 'フラットラッシュ'
            ],
            [
                'id' => 2,
                'name' => '3Dボリュームラッシュ'
            ],
            [
                'id' => 3,
                'name' => 'オフ・オプション'
            ],
            [
                'id' => 4,
                'name' => 'ラッシュリフト'
            ],
        ]);
    }
}
