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
        Schema::table('student', function (Blueprint $table) {
            $table->foreign(['groupId'], 'student_ibfk_1')->references(['id'])->on('group');
            $table->foreign(['parentId'], 'student_ibfk_2')->references(['id'])->on('parent');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function (Blueprint $table) {
            $table->dropForeign('student_ibfk_1');
            $table->dropForeign('student_ibfk_2');
        });
    }
};
