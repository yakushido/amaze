<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailDsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nail_d_s')->insert([
            [
                'id' => 1,
                'nail_genre_id' => 4,
                'name' => 'ハンド or フットケア',
                'plice' => 3080
            ],
            [
                'id' => 2,
                'nail_genre_id' => 4,
                'name' => 'カットのみ',
                'plice' => 550
            ],
            [
                'id' => 3,
                'nail_genre_id' => 4,
                'name' => '巻き爪ケア',
                'plice' => 2530
            ],
            
        ]);
    }
}
