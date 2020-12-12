<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourHeaderTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourHeaderTransaction', function (Blueprint $table) {
            $table->increments('tht_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('tour_id');
            $table->date('book_date');
            $table->date('start_date');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('tour_id')->references('tour_id')->on('tour');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourHeaderTransaction');
    }
}
