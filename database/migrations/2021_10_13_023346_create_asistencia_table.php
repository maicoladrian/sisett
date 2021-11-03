<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia', function (Blueprint $table) {
            $table->increments('id_asistencia');
            $table->date('fecha');
            $table->time('hora');
            $table->integer('asistencia_id_personal')->unsigned();
            $table->integer('asistencia_id_horario')->unsigned();
            $table->timestamps();

            $table->foreign('asistencia_id_personal')->references('id_personal')->on('personal');
            $table->foreign('asistencia_id_horario')->references('id_horario')->on('horario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asistencia');
    }
}
