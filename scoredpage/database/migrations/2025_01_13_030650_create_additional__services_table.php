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
        Schema::create('additional_services', function (Blueprint $table) {
            $table->id(); // ID único para la tabla additional_services
            $table->unsignedBigInteger('model_id'); // Relación con la tabla models
            $table->string('service_name', 100); // Nombre del servicio
            $table->decimal('price', 8, 2); // Valor del servicio
        
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps(); // Campos created_at y updated_at
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
