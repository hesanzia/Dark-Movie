<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDialogsTable extends Migration
{

    public function up()
    {
        Schema::create('dialogs', function (Blueprint $table) {
            $table->id();
            $table->string('movie_name');
            $table->longText('dialog');
            $table->unsignedBigInteger('movie_id');
            $table->timestamps();
            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dialogs');
    }
}
