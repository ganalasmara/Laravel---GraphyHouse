<?php

use Illuminate\Database\Seeder;

class photoCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photoCollection')->insert([
            [
                'pc_id'=>1,
                'photographer_id'=>1,
                'photo'=>'\Images\afternoon.jpg'
            ],
            [
                'pc_id'=>2,
                'photographer_id'=>1,
                'photo'=>'\Images\ants.jpg'
            ],
            [
                'pc_id'=>3,
                'photographer_id'=>1,
                'photo'=>'\Images\boat.jpg'
            ],
            [
                'pc_id'=>4,
                'photographer_id'=>2,
                'photo'=>'\Images\lion.jpg'
            ],
            [
                'pc_id'=>5,
                'photographer_id'=>2,
                'photo'=>'\Images\mushroom.jpg'
            ],
            [
                'pc_id'=>6,
                'photographer_id'=>2,
                'photo'=>'\Images\rose.jpg'
            ],
            [
                'pc_id'=>7,
                'photographer_id'=>2,
                'photo'=>'\Images\water.jpg'
            ],
        ]);
    }
}
