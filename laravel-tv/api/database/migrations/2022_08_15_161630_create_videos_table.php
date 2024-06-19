<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('fecha_carga');
            $table->string('link_id');
            $table->string('publicado');
            $table->string('destacado');
            $table->string('vivo');
            $table->string('id_categoria');
            $table->string('descripcion');
            $table->string('thumbnail');
            $table->string('link_video');
            $table->string('link_img');
            $table->string('reproductor');
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
        Schema::dropIfExists('videos');
    }
}
