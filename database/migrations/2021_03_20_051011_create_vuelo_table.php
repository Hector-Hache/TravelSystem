<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVueloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vuelo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idruta');//atributo para referenciar a ruta
            $table->foreign('idruta')->references('id')->on('ruta');//llave foranea para referenciar a la tabla ruta
            $table->unsignedBigInteger('tvuelo');//atributo para referenciar atipovuelo
            $table->foreign('tvuelo')->references('id')->on('tipovuelo');//llave foranea para referenciar tipovuelo
            $table->time('hsalida');
            $table->time('hllegada');
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
        Schema::dropIfExists('vuelo');
    }
}
