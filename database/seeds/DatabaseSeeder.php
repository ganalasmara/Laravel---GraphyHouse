<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(photographerSeeder::class);
        $this->call(photoCollectionSeeder::class);
        $this->call(customerSeeder::class);
        $this->call(photographerHeaderTransactionSeeder::class);
        $this->call(tourSeeder::class);
        $this->call(tourHeaderTransactionSeeder::class);
        $this->call(tourDetailTransactionSeeder::class);
    }
}
