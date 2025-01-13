<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('models', function (Blueprint $table) {
            $table->id('idModelo'); // ID único del modelo
            $table->unsignedBigInteger('idUsu')->nullable(); // Relación con la tabla usuarios(puede ser nulo)
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
            $table->string('apodo', 50)->nullable(); // Apodo (puede ser nulo)
            $table->string('colorCabello', 50); // Color de cabello
            $table->decimal('estatura', 5, 2); // Estatura en metros
            $table->decimal('peso', 5, 2); // Peso en kilogramos
            $table->string('genero', 20); // Género
            $table->string('medidas', 100); // Medidas (puede ser nulo)
            
            $table->foreign('idUsu')->references('idUsu')->on('usuarios')->onDelete('cascade'); // Relación con usuarios
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('models');
    }
};
