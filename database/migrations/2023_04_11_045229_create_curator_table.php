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
        Schema::create('curator', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('surname', 20);
            $table->string('lastName', 20);
            $table->string('login', 20);
            $table->string('password', 30);
            $table->unsignedInteger('groupId')->index('groupId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curator');
    }
};
