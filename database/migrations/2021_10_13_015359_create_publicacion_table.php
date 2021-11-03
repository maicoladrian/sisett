<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion', function (Blueprint $table) {
            $table->increments('id_publicacion');
            $table->string('titulo', 150);
            $table->string('descripcion', 500);
            $table->string('url_doc', 100);
            $table->dateTime('fecha_hora_publicacion');
            $table->bigInteger('publicacion_id_users')->unsigned();
            $table->timestamps();

            $table->foreign('publicacion_id_users')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicacion');
    }
}
