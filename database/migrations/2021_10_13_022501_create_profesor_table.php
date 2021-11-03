<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id_profesor');
            $table->integer('profesor_id_informacion_personal')->unsigned();
            $table->integer('profesor_id_unidad_educativa')->unsigned();
            $table->integer('profesor_id_rol')->unsigned();
            $table->timestamps();

            $table->foreign('profesor_id_informacion_personal')->references('id_informacion_personal')->on('informacion_personal');
            $table->foreign('profesor_id_unidad_educativa')->references('id_unidad_educativa')->on('unidad_educativa');
            $table->foreign('profesor_id_rol')->references('id_rol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesor');
    }
}
