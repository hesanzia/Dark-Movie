<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{

    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('gender');
            $table->string('nationality');
            $table->string('pic');
            $table->string('profile');
            $table->longText('about');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('artists');
    }
}
