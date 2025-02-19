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
            $table->id(); // ID único de la categoría
            $table->unsignedBigInteger('model_id'); // Relación con la tabla models
            $table->string('category_name', 100); // Nombre de la categoría
        
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps(); // Campos created_at y updated_at
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
