<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TimestampInTablesThatDontHave extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tc_tipo_sangre', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tc_congelador', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tc_donante', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tt_unidad_congelador', function (Blueprint $table) {
            $table->timestamps();
        });
        Schema::table('tt_inventario', function (Blueprint $table) {
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
        Schema::table('tc_tipo_sangre', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at']);
        });
        Schema::table('tc_congelador', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at']);
        });
        Schema::table('tc_donante', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at']);
        });
        Schema::table('tt_unidad_congelador', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at']);
        });
        Schema::table('tt_inventario', function (Blueprint $table) {
            $table->dropColumn(['created_at','updated_at']);
        });
    }
}
