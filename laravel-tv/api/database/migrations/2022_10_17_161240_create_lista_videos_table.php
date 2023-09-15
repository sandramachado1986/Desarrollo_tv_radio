<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listaVideos', function (Blueprint $table) {
            $table->id();
            $table->string('id_categoria');
            $table->string('id_imagenes');
            $table->string('titulo');
            $table->string('visible');
            $table->string('destacado');
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
        Schema::dropIfExists('lista_videos');
    }
}
