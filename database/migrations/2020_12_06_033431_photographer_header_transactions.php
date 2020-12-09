<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotographerHeaderTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographerHeaderTransaction', function (Blueprint $table) {
            $table->increments('pht_id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('photographer_id');
            $table->date('book_date');
            $table->date('work_date');
            $table->foreign('customer_id')->references('customer_id')->on('customer');
            $table->foreign('photographer_id')->references('photographer_id')->on('photographer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photographerHeaderTransaction');
    }
}
