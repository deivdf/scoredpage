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
        Schema::create('services', function (Blueprint $table) {
            $table->id('idServicio'); // ID único para la tabla services
            $table->unsignedBigInteger('idModelo'); // Relación con la tabla models
            $table->string('nombreServicio', 100); // Nombre del servicio
            
            $table->foreign('idModelo')->references('idModelo')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
