<?php

use Illuminate\Database\Seeder;

class tourDetailTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourDetailTransaction')->insert([
            [
                'tdt_id'=>1,
                'tht_id'=>1,
                'total_price'=>600000
            ],
            [
                'tdt_id'=>2,
                'tht_id'=>2,
                'total_price'=>500000
            ],
        ]);
    }
}
