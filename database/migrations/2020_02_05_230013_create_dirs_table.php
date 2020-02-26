<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirsTable extends Migration
{

    public function up()
    {
        Schema::create('dirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title','25');
            $table->string('image','25');
            $table->text('description','100');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dirs');
    }
}
