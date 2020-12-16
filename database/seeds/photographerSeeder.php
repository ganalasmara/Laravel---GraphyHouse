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
                'name'=>'Danny Phantom',
                'email'=>'dannyphantom@gmail.com',
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
                'name'=>'Emma Lucia',
                'email'=>'emmalucia@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\emma.jpg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>200000,
                'photographer_status'=>'active',
                'description'=>'Wedding photographer based in jogja',
            ],
            [
                'photographer_id'=>3,
                'name'=>'Kevin Yobeth',
                'email'=>'vinbeth@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\kevin.jpeg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>400000,
                'photographer_status'=>'active',
                'description'=>'Studio photographer based in bali',
            ],
            [
                'photographer_id'=>4,
                'name'=>'Richard Plum',
                'email'=>'richardplum@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\richard.jpeg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>200000,
                'photographer_status'=>'active',
                'description'=>'Portrait photographer based in jakarta',
            ],
            [
                'photographer_id'=>5,
                'name'=>'Daniel Renaldy',
                'email'=>'danielrenaldy@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\daniel.jpeg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>250000,
                'photographer_status'=>'active',
                'description'=>'Portrait photographer based in jakarta',
            ],
            [
                'photographer_id'=>6,
                'name'=>'Cynthia Goodsky',
                'email'=>'cynthiagoodsky@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\cynthia.jpg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>500000,
                'photographer_status'=>'active',
                'description'=>'Travel photographer based in jakarta',
            ],
            [
                'photographer_id'=>7,
                'name'=>'Ronald Axel',
                'email'=>'ronald@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\ronald.jpeg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>325000,
                'photographer_status'=>'active',
                'description'=>'Wedding photographer based in bandung',
            ],
            [
                'photographer_id'=>8,
                'name'=>'Albert Joseph',
                'email'=>'albertjoseph@gmail.com',
                'password'=>'emma',
                'gender'=>'female',
                'address'=>'Jl. EFG',
                'photographer_image'=>'\Images\albert.jpg',
                'portofolio_link'=>'googledrive.com',
                'book_price'=>180000,
                'photographer_status'=>'active',
                'description'=>'Studio photographer based in bali',
            ]
        ]);
    }
}
