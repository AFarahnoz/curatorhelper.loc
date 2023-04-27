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
        Schema::create('attendance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('studentId')->index('studentId');
            $table->integer('countWithReason')->nullable()->default(0);
            $table->integer('countWithoutReason')->nullable()->default(0);
            $table->integer('sum')->nullable()->default(0);
            $table->enum('cycle', ['1', '2', '3', '4', '5'])->nullable();
            $table->enum('yearOfStudy', ['2019 - 2020', '2020 - 2021', '2021 - 2022', '2022 - 2023'])->nullable();
            $table->enum('semestr', ['1', '2'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance');
    }
};
