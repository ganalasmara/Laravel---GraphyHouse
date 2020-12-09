<?php

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            [
                'customer_id'=>1,
                'name'=>'Andi',
                'email'=>'andi@gmail.com',
                'password'=>'andi',
                'gender'=>'male',
                'address'=>'Jl. ABC',
            ],
            [
                'customer_id'=>2,
                'name'=>'Budi',
                'email'=>'budi@gmail.com',
                'password'=>'budi',
                'gender'=>'male',
                'address'=>'Jl. BCD',
            ],
            [
                'customer_id'=>3,
                'name'=>'Charlie',
                'email'=>'charlie@gmail.com',
                'password'=>'charlie',
                'gender'=>'male',
                'address'=>'Jl. CDE',
            ],
        ]);
    }
}
