<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TestRelationTables extends Migration
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
            $table->string('descripcion','88')->nullable();
            $table->integer('cantidad_minima')->nullable();
            
            $table->unsignedInteger('tc_factor_rh_id');
            $table->foreign('tc_factor_rh_id')->references('id')->on('tc_factor_rh');

            $table->unsignedInteger('tc_grupo_sanguineo_id');
            $table->foreign('tc_grupo_sanguineo_id')->references('id')->on('tc_grupo_sanguineo');

            $table->unsignedInteger('tc_unidad_id');
            $table->foreign('tc_unidad_id')->references('id')->on('tc_unidad');

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
        Schema::dropIfExists('tc_tipo_sangre');
    }
}
