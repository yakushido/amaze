<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridals')->insert([
            [
                'id' => 1,
                'name' => 'シェービングFACE',
                'part' => 'お顔全体',
                'plice' => 2200
            ],
            [
                'id' => 2,
                'name' => 'シェービングBODY',
                'part' => '背中 + えり足 + 二の腕',
                'plice' => 3300
            ],
            [
                'id' => 3,
                'name' => 'ピーリングBODY【 L 】',
                'part' => '背中 + 二の腕',
                'plice' => 2200
            ],
            [
                'id' => 4,
                'name' => 'ピーリングBODY【 M 】',
                'part' => '脇 + ひざ周り',
                'plice' => 1650
            ],
            [
                'id' => 5,
                'name' => 'ピーリングBODY【 S 】',
                'part' => '脇のみ',
                'plice' => 1100
            ],
            [
                'id' => 6,
                'name' => '美白パック【 L 】',
                'part' => '背中 + デコルテ + 首',
                'plice' => 2750
            ],
            [
                'id' => 7,
                'name' => '美白パック【 M 】',
                'part' => '二の腕',
                'plice' => 1650
            ],
            [
                'id' => 8,
                'name' => '美白パック【 S 】',
                'part' => '脇 + えり足 + ひざ周り',
                'plice' => 1100
            ],
            [
                'id' => 9,
                'name' => '美肌パック【 L 】',
                'part' => '背中 + デコルテ + 首',
                'plice' => 2750
            ],
            [
                'id' => 10,
                'name' => '美肌パック【 M 】',
                'part' => '二の腕',
                'plice' => 1650
            ],
            [
                'id' => 11,
                'name' => '美肌パック【 S 】',
                'part' => '脇 + えり足 + ひざ周り',
                'plice' => 1100
            ],
            [
                'id' => 12,
                'name' => '泡エステBODY',
                'part' => '背中全体',
                'plice' => 2200
            ],
            
        ]);

    }
}
