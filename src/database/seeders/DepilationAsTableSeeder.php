<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationAsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_a_s')->insert([
            [
                'id' => 1,
                'depilation_genre_id' => 1,
                'name' => '4回コース',
                'plice' => 145200
            ],
            [
                'id' => 2,
                'depilation_genre_id' => 1,
                'name' => '12回コース',
                'plice' => 396000
            ],
            [
                'id' => 3,
                'depilation_genre_id' => 1,
                'name' => '【プレミアム】4回コース',
                'plice' => 198000
            ],
            [
                'id' => 4,
                'depilation_genre_id' => 1,
                'name' => '【プレミアム】12回コース',
                'plice' => 440000
            ],
            
        ]);

    }
}
