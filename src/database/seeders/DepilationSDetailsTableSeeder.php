<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepilationSDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depilation_s_details')->insert([
            [
                'id' => 1,
                'name' => '鼻下・口周り',
            ],
            [
                'id' => 2,
                'name' => 'アゴ',
            ],
            [
                'id' => 3,
                'name' => '頬（ほほ）',
            ],
            [
                'id' => 4,
                'name' => '額（ひたい）',
            ],
            [
                'id' => 5,
                'name' => 'えり足',
            ],
            [
                'id' => 6,
                'name' => '両脇',
            ],
            [
                'id' => 7,
                'name' => '手の甲（指含む）',
            ],
            [
                'id' => 8,
                'name' => '乳輪',
            ],
            [
                'id' => 9,
                'name' => 'へそ周り',
            ],
            [
                'id' => 10,
                'name' => '足の甲（指含む）',
            ],
            [
                'id' => 11,
                'name' => 'ビキニライン上部',
            ],
            [
                'id' => 12,
                'name' => 'Vライン',
            ],
            [
                'id' => 13,
                'name' => 'Iライン',
            ],
            [
                'id' => 14,
                'name' => '肛門周り',
            ],
            [
                'id' => 15,
                'name' => 'ひざ',
            ],
            
        ]);
    }
}
