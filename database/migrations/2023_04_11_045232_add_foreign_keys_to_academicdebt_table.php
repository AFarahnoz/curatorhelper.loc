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
        Schema::table('academicdebt', function (Blueprint $table) {
            $table->foreign(['studentId'], 'academicdebt_ibfk_1')->references(['id'])->on('student');
            $table->foreign(['subjectId'], 'academicdebt_ibfk_3')->references(['id'])->on('subject');
            $table->foreign(['studentId'], 'academicdebt_ibfk_2')->references(['id'])->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('academicdebt', function (Blueprint $table) {
            $table->dropForeign('academicdebt_ibfk_1');
            $table->dropForeign('academicdebt_ibfk_3');
            $table->dropForeign('academicdebt_ibfk_2');
        });
    }
};
