<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('curatorhourtab', function (Blueprint $table) {
            $table->foreign(['curatorHourId'], 'curatorhourtab_ibfk_1')->references(['id'])->on('curatorhour');
            $table->foreign(['studentId'], 'curatorhourtab_ibfk_2')->references(['id'])->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curatorhourtab', function (Blueprint $table) {
            $table->dropForeign('curatorhourtab_ibfk_1');
            $table->dropForeign('curatorhourtab_ibfk_2');
        });
    }
};
