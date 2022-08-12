<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            
            $table->time('horallegada');
            $table->string('tipo');
            $table->time('horaEntrega');
            $table->integer('valortotal');
            $table->date('fecha');

            $table->unsignedBigInteger('id_mascota');
            $table->foreign('id_mascota')->references('id')->on('mascotas')
            ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('registros');
    }
}
