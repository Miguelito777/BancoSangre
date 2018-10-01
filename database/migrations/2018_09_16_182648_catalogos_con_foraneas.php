<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogosConForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_tipo_sangre', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion_tipo_sangre');
            $table->integer('cantidad_minima');

            $table->unsignedInteger('tc_factor_rh_id_factor_rh');
            $table->foreign('tc_factor_rh_id_factor_rh')->references('id')->on('tc_factor_rh');

            $table->unsignedInteger('tc_grupo_sanguineo_id_grupo_sanguineo');
            $table->foreign('tc_grupo_sanguineo_id_grupo_sanguineo')->references('id')->on('tc_grupo_sanguineo');

            $table->unsignedInteger('tc_unidades_id_unidades');
            $table->foreign('tc_unidades_id_unidades')->references('id')->on('tc_unidad');

        });

        Schema::create('tc_congelador', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');

            $table->unsignedInteger('tc_almacen_id_almacen');
            $table->foreign('tc_almacen_id_almacen')->references('id')->on('tc_almacen');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tc_tipo_sangre');
        Schema::dropIfExists('tc_congelador');
    }
}
