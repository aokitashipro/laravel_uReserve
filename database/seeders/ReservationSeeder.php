<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([[
            'user_id' => 1,
            'event_id' => 1,
            'number_of_people' => 5,
            'canceled_date' => null
        ],[
            'user_id' => 2,
            'event_id' => 1,
            'number_of_people' => 3,
            'canceled_date' => null
        ],[
            'user_id' => 1,
            'event_id' => 2,
            'number_of_people' => 2,
            'canceled_date' => null
        ],[
            'user_id' => 2,
            'event_id' => 2,
            'number_of_people' => 2,
            'canceled_date' => '2022-03-01 00:00:00'
        ]
    ]);

    }
}
