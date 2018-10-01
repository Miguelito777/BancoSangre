<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogosSinForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_grupo_sanguineo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo_sanguineo','8')->nullable();
            $table->timestamps();
        });

        Schema::create('tc_factor_rh', function (Blueprint $table) {
            $table->increments('id');
            $table->string('factor_rh','8')->nullable();
            $table->timestamps();
        });

        Schema::create('tc_unidad', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unidad','88')->nullable();
            $table->timestamps();
        });
        Schema::create('ts_tipo_movimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_movimiento','88')->nullable();
            $table->timestamps();
        });
        Schema::create('tc_almacen', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre','888')->nullable();
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
        Schema::dropIfExists('tc_grupo_sanguineo');
        Schema::dropIfExists('tc_factor_rh');
        Schema::dropIfExists('tc_unidad');
        Schema::dropIfExists('ts_tipo_movimiento');
        Schema::dropIfExists('tc_almacen');
    }
}
