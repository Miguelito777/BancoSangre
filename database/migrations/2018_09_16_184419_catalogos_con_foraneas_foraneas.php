<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CatalogosConForaneasForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tc_donante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('telefonos');
            $table->string('correo');
            $table->date('fecha_nacimiento');
            $table->float('peso',8,2);
            $table->string('sexo');
            $table->boolean('epatitis')->default(0);
            $table->boolean('tatAcuPir')->default(0);
            $table->unsignedInteger('tc_tipo_sangre_id_tipo_sangre');
            $table->foreign('tc_tipo_sangre_id_tipo_sangre')->references('id')->on('tc_tipo_sangre');
        });

        Schema::create('tt_unidad_congelador', function (Blueprint $table) {
            $table->increments('id');            
            $table->float('cantidadMaxima');

            $table->unsignedInteger('tc_unidades_id');
            $table->foreign('tc_unidades_id')->references('id')->on('tc_unidad');

            $table->unsignedInteger('tc_congelador_id');
            $table->foreign('tc_congelador_id')->references('id')->on('tc_congelador');
        });

        Schema::create('tt_inventario', function (Blueprint $table) {
            $table->increments('id');            
            $table->float('cantidad');
            $table->date('fecha_vencimiento');
            $table->boolean('estado')->default(1);

            $table->unsignedInteger('ts_tipo_movimiento_id');
            $table->foreign('ts_tipo_movimiento_id')->references('id')->on('ts_tipo_movimiento');

            $table->unsignedInteger('tc_tipo_sangre_id');
            $table->foreign('tc_tipo_sangre_id')->references('id')->on('tc_tipo_sangre');

            $table->unsignedInteger('tt_unidad_congelador_id');
            $table->foreign('tt_unidad_congelador_id')->references('id')->on('tt_unidad_congelador');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
