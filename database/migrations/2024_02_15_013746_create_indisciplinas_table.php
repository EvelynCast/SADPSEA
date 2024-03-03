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
        Schema::create('indisciplinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha');
            $table->string('motivo');
            $table->string('comentario');
            $table->integer('estado')->default(0);

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indisciplinas');
    }
};
