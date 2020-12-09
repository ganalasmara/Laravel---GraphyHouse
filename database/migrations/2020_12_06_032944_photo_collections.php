<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PhotoCollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photoCollection', function (Blueprint $table) {
            $table->increments('pc_id');
            $table->unsignedInteger('photographer_id');
            $table->string('photo');
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
        Schema::dropIfExists('photoCollection');
    }
}
