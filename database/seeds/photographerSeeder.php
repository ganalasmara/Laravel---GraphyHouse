<?php

use Illuminate\Database\Seeder;

class photographerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photographer')->insert([
            [
                'photographer_id'=>1,
                'name'=>'Danny',
                'email'=>'danny@gmail.com',
                'password'=>'danny',
                'gender'=>'male',
                'address'=>'Jl. DEF',
                'photographer_image'=>'\Images\danny.jpg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>300000,
                'photographer_status'=>'active',
                'description'=>'Studio photographer based in jakarta',
            ],
            [
                'photographer_id'=>2,
                'name'=>'Emma',
                'email'=>'emma@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\emma.jpg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>200000,
                'photographer_status'=>'active',
                'description'=>'Studio photographer based in jogja',
            ]
        ]);
    }
}
