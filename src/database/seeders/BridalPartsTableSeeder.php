<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalPartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_parts')->insert([
            [
                'id' => 1,
                'name' => 'お顔全体'
            ],
            [
                'id' => 2,
                'name' => '背中 + えり足 + 二の腕'
            ],
            [
                'id' => 3,
                'name' => '脇のみ'
            ],
            [
                'id' => 4,
                'name' => '脇 + ひざ周り'
            ],
            [
                'id' => 5,
                'name' => '背中 + 二の腕'
            ],
            [
                'id' => 6,
                'name' => '脇 + えり足 + ひざ周り'
            ],
            [
                'id' => 7,
                'name' => '二の腕'
            ],
            [
                'id' => 8,
                'name' => '背中 + デコルテ + 首'
            ],
            [
                'id' => 9,
                'name' => '背中全体'
            ],
            
        ]);
    }
}
