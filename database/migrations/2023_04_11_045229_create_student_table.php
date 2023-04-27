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
        Schema::create('student', function (Blueprint $table) {
            $table->increments('id')->comment('Раками тартибии истифодабаранда');
            $table->string('name', 20)->comment('Ном');
            $table->string('surname', 20)->comment('Насаб');
            $table->string('lastName', 20)->comment('Номи падар');
            $table->string('login', 20)->comment('Логин');
            $table->string('password', 30)->comment('Парол');
            $table->date('dateOfBirth')->comment('Санаи таваллуд');
            $table->string('address', 60)->comment('Суроға');
            $table->string('phone', 13)->comment('Рақами телефон');
            $table->enum('gender', ['Зан', 'Мард'])->comment('Ҷинс');
            $table->string('livingAddress', 60)->comment('Суроқаи истиқомат');
            $table->unsignedInteger('entryYear')->comment('Соли дохилшавӣ');
            $table->unsignedInteger('groupId')->index('groupId')->comment('Гурӯҳ');
            $table->unsignedInteger('parentId')->index('parentId')->comment('Волидайн');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
};
