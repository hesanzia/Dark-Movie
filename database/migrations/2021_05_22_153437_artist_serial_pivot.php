<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtistSerialPivot extends Migration
{

    public function up()
    {
        Schema::create('artist_serial',function (Blueprint $table){
            $table->foreignId('artist_id')->references('id')->on('artists')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('serial_id')->references('id')->on('serials')->onDelete('cascade')->onUpdate('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('artist_serial');
    }
}
