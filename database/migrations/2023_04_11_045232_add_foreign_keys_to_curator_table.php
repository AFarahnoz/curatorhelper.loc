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
        Schema::table('curator', function (Blueprint $table) {
            $table->foreign(['groupId'], 'curator_ibfk_1')->references(['id'])->on('group');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('curator', function (Blueprint $table) {
            $table->dropForeign('curator_ibfk_1');
        });
    }
};
