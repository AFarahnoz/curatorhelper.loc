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
        Schema::table('message', function (Blueprint $table) {
            $table->foreign(['studentId'], 'message_ibfk_1')->references(['id'])->on('student');
            $table->foreign(['parentId'], 'message_ibfk_2')->references(['id'])->on('parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('message', function (Blueprint $table) {
            $table->dropForeign('message_ibfk_1');
            $table->dropForeign('message_ibfk_2');
        });
    }
};
