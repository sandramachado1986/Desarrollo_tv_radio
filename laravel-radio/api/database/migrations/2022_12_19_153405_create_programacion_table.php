<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programacion', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dia')->unsigned();
            $table->integer('id_horario')->unsigned();
            $table->integer('id_programa')->unsigned();
            $table->integer('visible')->unsigned();
            $table->integer('activo')->unsigned();

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
        Schema::dropIfExists('programacions');
    }
}
