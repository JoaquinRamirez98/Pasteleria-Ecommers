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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre_producto');
            $table->string('Stock');

            $table->string('slug');

            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            
            $table->unsignedBigInteger('presentacion_id');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones')->nullable();

            $table->unsignedBigInteger('sabor_masa_id');
            $table->foreign('sabor_masa_id')->references('id')->on('sabor_masas')->nullable();

            $table->unsignedBigInteger('relleno_sabor_id');
            $table->foreign('relleno_sabor_id')->references('id')->on('rellenos_sabores')->nullable();

            $table->unsignedBigInteger('decoracion_id');
            $table->foreign('decoracion_id')->references('id')->on('decoraciones')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
