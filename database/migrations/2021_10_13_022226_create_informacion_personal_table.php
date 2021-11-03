<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacionPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacion_personal', function (Blueprint $table) {
            $table->increments('id_informacion_personal');
            $table->string('ap_paterno', 35);
            $table->string('ap_materno', 35);
            $table->string('nombres', 50);
            $table->string('ci', 15);
            $table->string('celular', 20);
            
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
        Schema::dropIfExists('informacion_personal');
    }
}
