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
        Schema::create('curatorhour', function (Blueprint $table) {
            $table->increments('id');
            $table->string('time', 5);
            $table->unsignedInteger('groupId')->index('groupId');
            $table->unsignedInteger('auditoriumId')->index('auditoriumId');
            $table->string('date', 13);
            $table->string('theme', 30);
            $table->string('protocol');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curatorhour');
    }
};
