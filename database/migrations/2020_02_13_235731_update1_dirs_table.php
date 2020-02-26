<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1DirsTable extends Migration
{

    public function up()
    {
        Schema::table('dirs', function (Blueprint $table) {
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::table('dirs', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
