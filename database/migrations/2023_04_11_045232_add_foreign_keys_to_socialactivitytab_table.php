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
        Schema::table('socialactivitytab', function (Blueprint $table) {
            $table->foreign(['studentId'], 'socialactivitytab_ibfk_1')->references(['id'])->on('student');
            $table->foreign(['socialActivityId'], 'socialactivitytab_ibfk_2')->references(['id'])->on('socialactivity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('socialactivitytab', function (Blueprint $table) {
            $table->dropForeign('socialactivitytab_ibfk_1');
            $table->dropForeign('socialactivitytab_ibfk_2');
        });
    }
};
