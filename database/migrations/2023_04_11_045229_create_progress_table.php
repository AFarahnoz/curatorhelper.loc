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
        Schema::create('progress', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('studentId')->index('studentId');
            $table->unsignedInteger('subjectId')->index('subjectId');
            $table->integer('teacherMark')->nullable();
            $table->integer('examMark')->nullable();
            $table->integer('sum')->nullable();
            $table->enum('markWithLetter', ['A', 'B', 'C', 'D', 'F', 'FF'])->nullable();
            $table->enum('cycle', ['0', '1', '2', '3', '4', '5']);
            $table->enum('semestr', ['1', '2']);
            $table->enum('yearOfStudy', ['2019 - 2020', '2020 - 2021', '2021 - 2022', '2022 - 2023']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progress');
    }
};
