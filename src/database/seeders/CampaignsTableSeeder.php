<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campaigns')->insert([
            [
                'id' => 1,
                'title' => 'test',
                'detail' => 'testtesttesttesttesttesttesttesttesttest',
                'gender_id' => 1,
                'start' => '2000-10-10',
                'end' => '2000-10-20'
            ],
            [
                'id' => 2,
                'title' => 'test1',
                'detail' => 'test1test1test1test1test1test1test1test1test1',
                'gender_id' => 1,
                'start' => '2010-05-05',
                'end' => '2010-06-05'
            ],
            [
                'id' => 3,
                'title' => 'test2',
                'detail' => 'test2test2test2test2test2test2test2test2',
                'gender_id' => 2,
                'start' => '2010-07-01',
                'end' => '2010-07-20'
            ],
            [
                'id' => 4,
                'title' => 'test3',
                'detail' => 'test3test3test3test3test3test3test3test3test3test3',
                'gender_id' => 2,
                'start' => '2020-11-11',
                'end' => '2020-11-22'
            ],
            [
                'id' => 5,
                'title' => 'test4',
                'detail' => 'test4test4test4test4test4test4test4test4test4test4',
                'gender_id' => 3,
                'start' => '2030-10-10',
                'end' => '2030-10-20'
            ],
            [
                'id' => 6,
                'title' => 'test5',
                'detail' => 'test5test5test5test5test5test5test5test5test5test5test5',
                'gender_id' => 3,
                'start' => '2040-10-01',
                'end' => '2050-10-01'
            ],
            [
                'id' => 7,
                'title' => 'test6',
                'detail' => 'test6test6test6test6test6test6test6test6test6test6test6',
                'gender_id' => 3,
                'start' => '2022-10-01',
                'end' => '2023-10-01'
            ],
            
            [
                'id' => 8,
                'title' => 'test7',
                'detail' => 'test7test7test7test7test7test7test7test7test7test7test7test7',
                'gender_id' => 3,
                'start' => '2022-07-01',
                'end' => '2023-07-01'
            ],
            
        ]);
    }
}
