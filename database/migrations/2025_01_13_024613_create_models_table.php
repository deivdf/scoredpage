<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (Schema::hasTable('users')) {
            Schema::create('models', function (Blueprint $table) {
                $table->id('idModelo'); // ID único del modelo
                $table->unsignedBigInteger('idUsu')->nullable(); // Relación con la tabla users (puede ser nulo)
                $table->date('fechaNacimiento'); // Fecha de nacimiento
                $table->integer('edad'); // Edad
                $table->string('telefono', 20); // Teléfono
                $table->string('profesion', 100)->nullable(); // Profesión (puede ser nulo)
                $table->text('experiencia'); // Experiencia
                $table->text('descripcion')->nullable(); // Descripción (puede ser nulo)
                $table->string('rh', 3); // Grupo sanguíneo (RH)
                $table->string('colorPiel', 50); // Color de piel
                $table->boolean('disponibilidad'); // Disponibilidad
                $table->decimal('tarifaHora', 8, 2); // Tarifa por hora

                $table->foreign('idUsu')->references('idUsu')->on('users')->onDelete('cascade'); // Relación con la tabla users
            });
        } else {
            // Lanza una excepción o maneja el error de alguna manera
            throw new Exception('La tabla users no existe.');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('models');
    }
}