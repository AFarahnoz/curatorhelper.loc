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
        Schema::table('curatorhour', function (Blueprint $table) {
            $table->foreign(['groupId'], 'curatorhour_ibfk_1')->references(['id'])->on('group');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curatorhour', function (Blueprint $table) {
            $table->dropForeign('curatorhour_ibfk_1');

        });
    }
};
