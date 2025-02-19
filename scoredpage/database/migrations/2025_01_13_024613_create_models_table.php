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
                $table->id(); // ID único del modelo
                $table->date('birth_date'); // Fecha de nacimiento
                $table->integer('age'); // Edad
                $table->string('phone', 20); // Teléfono
                $table->string('profession', 100)->nullable(); // Profesión (puede ser nulo)
                $table->text('experience'); // Experiencia
                $table->text('description')->nullable(); // Descripción (puede ser nulo)
                $table->string('blood_type', 3); // Grupo sanguíneo (RH)
                $table->string('skin_color', 50); // Color de piel
                $table->boolean('availability'); // Disponibilidad
                $table->decimal('hourly_rate', 8, 2); // Tarifa por hora
                $table->timestamps(); // Campos created_at y updated_at
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