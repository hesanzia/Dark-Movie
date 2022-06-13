<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{

    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pic');
            $table->string('background');
            $table->string('score');
            $table->unsignedBigInteger('director_id');
            $table->string('genre');
            $table->string('quality');
            $table->date('year');
            $table->longText('description');
            $table->string('link');
            $table->timestamps();
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
