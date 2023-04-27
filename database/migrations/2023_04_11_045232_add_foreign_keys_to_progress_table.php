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
        Schema::table('progress', function (Blueprint $table) {
            $table->foreign(['studentId'], 'progress_ibfk_1')->references(['id'])->on('student');
            $table->foreign(['subjectId'], 'progress_ibfk_3')->references(['id'])->on('subject');
            $table->foreign(['studentId'], 'progress_ibfk_2')->references(['id'])->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('progress', function (Blueprint $table) {
            $table->dropForeign('progress_ibfk_1');
            $table->dropForeign('progress_ibfk_3');
            $table->dropForeign('progress_ibfk_2');
        });
    }
};
