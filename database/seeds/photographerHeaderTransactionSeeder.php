<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class photographerHeaderTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photographerHeaderTransaction')->insert([
            [
                'pht_id'=>1,
                'customer_id'=>1,
                'photographer_id'=>2,
                'book_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'work_date'=> Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'pht_id'=>2,
                'customer_id'=>2,
                'photographer_id'=>1,
                'book_date'=> Carbon::now()->format('Y-m-d H:i:s'),
                'work_date'=> Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
