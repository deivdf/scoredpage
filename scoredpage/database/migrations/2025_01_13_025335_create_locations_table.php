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
        Schema::create('locations', function (Blueprint $table) {
            $table->id(); // ID único para la tabla locations
            $table->unsignedBigInteger('model_id'); // Relación con la tabla models
            $table->string('city', 100); // Ciudad
            $table->string('neighborhood', 100); // Barrio

            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade'); // Relación con la tabla models
            $table->timestamps(); // Campos created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
