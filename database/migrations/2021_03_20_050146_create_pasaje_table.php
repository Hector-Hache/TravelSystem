<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasajeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasaje', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idvuelo');//atributo para referenciar a ruta
            $table->foreign('idvuelo')->references('id')->on('vuelo');//llave foranea para referenciar a la tabla ruta
            $table->unsignedBigInteger('idcliente');//atributo para referenciar atipovuelo
            $table->foreign('idcliente')->references('id')->on('users');//llave foranea para referenciar tipovuelo
            $table->unsignedBigInteger('idavion');//atributo para referenciar atipovuelo
            $table->foreign('idavion')->references('id')->on('avion');//llave foranea para referenciar tipovuelo
            $table->dateTime('fecha');
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
        Schema::dropIfExists('pasaje');
    }
}
