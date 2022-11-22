<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NailGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nail_genres')->insert([
            [
                'id' => 1,
                'name' => 'ジェルネイル'
            ],
            [
                'id' => 2,
                'name' => 'スカルプチュア'
            ],
            [
                'id' => 3,
                'name' => 'オフ・オプション'
            ],
            [
                'id' => 4,
                'name' => 'ケア'
            ],
            
        ]);
    }
}
