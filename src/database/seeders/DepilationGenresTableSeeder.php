<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_genres')->insert([
            [
                'id' => 1,
                'name' => '全身脱毛',
            ],
            [
                'id' => 2,
                'name' => '部分脱毛',
            ],
            [
                'id' => 3,
                'name' => 'セレクト6回コース',
            ],
            
        ]);
    }
}
