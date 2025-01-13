<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional__services', function (Blueprint $table) {
            $table->id('idServAdic'); // ID único para la tabla services
            $table->unsignedBigInteger('idModelo'); // Relación con la tabla models
            $table->string('nombreServAdic', 100); // Nombre del servicio
            $table->decimal('valor', 8, 2); // Valor del servicio
            
            $table->foreign('idModelo')->references('idModelo')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional__services');
    }
};
