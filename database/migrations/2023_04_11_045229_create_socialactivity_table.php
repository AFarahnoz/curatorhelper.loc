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
        Schema::create('socialactivity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('date', 10);
            $table->string('time', 5);
            $table->unsignedInteger('groupId')->index('groupId');
            $table->string('place', 40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socialactivity');
    }
};
