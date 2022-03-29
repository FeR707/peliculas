<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('guion');
            $table->LongText('sinopsis');
            $table->date('fecha_estreno');
            $table->string('pais');
            $table->string('duracion');
            $table->string('idioma');
            $table->LongText('imagen');

            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelate('cascade');

            $table->unsignedBigInteger('cine_id');
            $table->foreign('cine_id')->references('id')->on('cines')->onDelate('cascade');

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
        Schema::dropIfExists('peliculas');
    }
};
