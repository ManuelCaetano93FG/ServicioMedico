<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedInteger('id_user_patient')->nullable();
            $table->foreign('id_user_patient')->references('id')->on('users')->update('cascade')->delete('cascade');
            $table->unsignedInteger('id_user_doctor')->nullable();
            $table->foreign('id_user_doctor')->references('id')->on('users')->update('cascade')->delete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('appointments');
		DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
