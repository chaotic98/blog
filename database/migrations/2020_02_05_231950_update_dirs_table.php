<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDirsTable extends Migration
{

    public function up()
    {
        Schema::table('dirs', function (Blueprint $table) {
            $table->boolean('active')->after('description')->default('0');
        });
    }


    public function down()
    {
        Schema::table('dirs', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
}
