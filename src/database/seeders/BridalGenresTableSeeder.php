<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalGenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_genres')->insert([
            [
                'id' => 1,
                'name' => 'カスタムメニュー'
            ],
            [
                'id' => 2,
                'name' => '1day'
            ],
            [
                'id' => 3,
                'name' => 'マタニティプラン(16週目から)'
            ],
            [
                'id' => 4,
                'name' => '単品メニュー'
            ],
            
        ]);
    }
}
