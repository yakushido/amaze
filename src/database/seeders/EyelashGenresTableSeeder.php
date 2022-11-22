<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EyelashGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eyelash_genres')->insert([
            [
                'id' => 1,
                'name' => 'フラットマッシュ'
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
