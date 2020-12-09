<?php

use Illuminate\Database\Seeder;

class tourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tour')->insert([
            [
                'tour_id'=>1,
                'name'=>'Bali Tours',
                'price'=>1000000,
                'tour_image'=>'\Images\bali.jpg',
                'description'=>'Nikmati perjalanan berkeliling bali dan jelajahi tempat-tampat wisata di bali. Pesan sekarang!',
                'tour_status'=>'active'
            ],
            [
                'tour_id'=>2,
                'name'=>'Surabaya Tours',
                'price'=>200000,
                'tour_image'=>'\Images\surabaya.jpg',
                'description'=>'Nikmati perjalanan berkeliling surabaya dan jelajahi tempat-tampat wisata di surabaya. Pesan sekarang!',
                'tour_status'=>'active'
            ],
            [
                'tour_id'=>3,
                'name'=>'Jogja Tours',
                'price'=>300000,
                'tour_image'=>'\Images\jogja.jpg',
                'description'=>'Nikmati perjalanan berkeliling jogja dan jelajahi tempat-tampat wisata di jogja. Pesan sekarang!',
                'tour_status'=>'active'
            ],
        ]);
    }
}
