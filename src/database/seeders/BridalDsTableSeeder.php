<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BridalDsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bridal_d_s')->insert([
            [
                'id' => 1,
                'bridal_genre_id' => 4,
                'part' => 'お顔全体',
                'name' => 'シェービングFACE',
                'plice' => 2200
            ],
            [
                'id' => 2,
                'bridal_genre_id' => 4,
                'part' => '背中 + えり足 + 二の腕',
                'name' => 'シェービングBODY',
                'plice' => 3300
            ],
            [
                'id' => 3,
                'bridal_genre_id' => 4,
                'part' => '脇のみ',
                'name' => 'ピーリングBODY【 S 】',
                'plice' => 1100
            ],
            [
                'id' => 4,
                'bridal_genre_id' => 4,
                'part' => '脇 + ひざ周り',
                'name' => 'ピーリングBODY【 M 】',
                'plice' => 1650
            ],
            [
                'id' => 5,
                'bridal_genre_id' => 4,
                'part' => '背中 + 二の腕',
                'name' => 'ピーリングBODY【 L 】',
                'plice' => 2200
            ],
            [
                'id' => 6,
                'bridal_genre_id' => 4,
                'part' => '脇 + えり足 + ひざ周り',
                'name' => '美白パック【 S 】',
                'plice' => 1100
            ],
            [
                'id' => 7,
                'bridal_genre_id' => 4,
                'part' => '二の腕',
                'name' => '美白パック【 M 】',
                'plice' => 1650
            ],
            [
                'id' => 8,
                'bridal_genre_id' => 4,
                'part' => '背中 + デコルテ + 首',
                'name' => '美白パック【 L 】',
                'plice' => 2750
            ],
            [
                'id' => 9,
                'bridal_genre_id' => 4,
                'part' => '脇 + えり足 + ひざ周り',
                'name' => '美肌パック【 S 】',
                'plice' => 1100 
            ],
            [
                'id' => 10,
                'bridal_genre_id' => 4,
                'part' => '二の腕',
                'name' => '美肌パック【 M 】',
                'plice' => 1650
            ],
            [
                'id' => 11,
                'bridal_genre_id' => 4,
                'part' => '背中 + デコルテ + 首',
                'name' => '美肌パック【 L 】',
                'plice' => 2750
            ],
            [
                'id' => 12,
                'bridal_genre_id' => 4,
                'part' => '背中全体',
                'name' => '泡エステBODY',
                'plice' => 2200
            ],
            
        ]);
    }
}
