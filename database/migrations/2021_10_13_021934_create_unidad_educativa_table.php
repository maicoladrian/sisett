<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadEducativaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidad_educativa', function (Blueprint $table) {
            $table->increments('id_unidad_educativa');
            $table->string('nombre_unidad_educativa', 100);
            $table->string('antecedentes', 500);
            $table->integer('unidad_educativa_id_clasificacion_ue')->unsigned();
            $table->integer('unidad_educativa_id_lugar')->unsigned();
            $table->timestamps();

            $table->foreign('unidad_educativa_id_clasificacion_ue')->references('id_clasificacion_ue')->on('clasificacion_ue');
            $table->foreign('unidad_educativa_id_lugar')->references('id_lugar')->on('lugar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unidad_educativa');
    }
}
