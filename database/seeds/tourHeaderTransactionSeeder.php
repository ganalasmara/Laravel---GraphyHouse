<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class tourHeaderTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tourHeaderTransaction')->insert([
            [
                'tht_id'=>1,
                'customer_id'=>1,
                'tour_id'=>3,
                'book_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'start_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'end_date'=> Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'tht_id'=>2,
                'customer_id'=>2,
                'tour_id'=>2,
                'book_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'start_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'end_date'=> Carbon::now()->format('Y-m-d H:i:s'),
            ],
        ]);
    }
}
