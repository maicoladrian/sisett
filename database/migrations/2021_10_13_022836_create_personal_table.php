<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id_personal');
            $table->string('codigo_control', 25)->unique();
            $table->string('mac_pc', 100)->unique();
            $table->integer('personal_id_informacion_personal')->unsigned();
            $table->integer('personal_id_cargo')->unsigned();
            $table->timestamps();

            $table->foreign('personal_id_informacion_personal')->references('id_informacion_personal')->on('informacion_personal');
            $table->foreign('personal_id_cargo')->references('id_cargo')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
