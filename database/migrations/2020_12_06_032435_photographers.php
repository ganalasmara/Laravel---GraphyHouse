<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Photographers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer', function (Blueprint $table) {
            $table->increments('photographer_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->string('address');
            $table->string('photographer_image');
            $table->string('portofolio_link');
            $table->integer('book_price');
            $table->string('photographer_status');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('photographer');
    }
}
