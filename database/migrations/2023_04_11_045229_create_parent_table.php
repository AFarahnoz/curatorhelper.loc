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
        Schema::create('parent', function (Blueprint $table) {
            $table->unsignedInteger('id')->primary();
            $table->string('fullName', 50)->nullable();
            $table->string('phone', 13)->nullable();
            $table->string('address', 60)->nullable();
            $table->string('login', 20)->nullable();
            $table->string('password', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parent');
    }
};
