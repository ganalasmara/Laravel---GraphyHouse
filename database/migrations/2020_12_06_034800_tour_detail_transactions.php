<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TourDetailTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourDetailTransaction', function (Blueprint $table) {
            $table->increments('tdt_id');
            $table->unsignedInteger('tht_id');
            $table->integer('total_price');
            $table->foreign('tht_id')->references('tht_id')->on('tourHeaderTransaction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourDetailrTransaction');
    }
}
