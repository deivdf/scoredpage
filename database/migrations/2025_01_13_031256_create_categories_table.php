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
        Schema::create('categories', function (Blueprint $table) {
            $table->id('idCategoria'); // ID único de la categoría
            $table->unsignedBigInteger('idModelo'); // Relación con la tabla models
            $table->string('NombreCategoria', 100); // Nombre de la categoría

            $table->foreign('idModelo')->references('idModelo')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
