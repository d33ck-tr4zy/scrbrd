<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // Base models which dont have connection
            DelayReasonSeeder::class,
            ScoreTypeSeeder::class,
            HolidaySeeder::class,
            MemberSeeder::class,


            // Connected Models
            ScoreWeightSeeder::class,
//            MemberScoreSeeder::class,

        ]);
    }
}
