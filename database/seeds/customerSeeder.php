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
        DB::table('users')->insert([
            [
                'id'=>1,
                'name'=>'Andi',
                'email'=>'andi@gmail.com',
                'password'=> Hash::make('andi'),
                'gender'=>'male',
                'address'=>'Jl. ABC',
            ],
            [
                'id'=>2,
                'name'=>'Budi',
                'email'=>'budi@gmail.com',
                'password'=>Hash::make('budi'),
                'gender'=>'male',
                'address'=>'Jl. BCD',
            ],
            [
                'id'=>3,
                'name'=>'Charlie',
                'email'=>'charlie@gmail.com',
                'password'=>Hash::make('charlie'),
                'gender'=>'male',
                'address'=>'Jl. CDE',
            ],
        ]);
    }
}
