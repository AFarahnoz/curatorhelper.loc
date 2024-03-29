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
        Schema::create('message', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->string('date', 13);
            $table->string('time', 8);
            $table->enum('receiver', ['Донишҷӯ', 'Волидайн']);
            $table->unsignedInteger('studentId')->nullable()->index('studentId');
            $table->unsignedInteger('parentId')->nullable()->index('parentId');
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
        Schema::dropIfExists('message');
    }
};
