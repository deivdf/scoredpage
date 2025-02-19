<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->foreignId('role_id')->constrained('roles')->onDelete('cascade')->default(2); // Clave foránea con valor por defecto
            
            $table->string('name'); // Nombre del usuario
            $table->string('email')->unique(); // Email único
            $table->string('phone')->nullable();; // Teléfono
            $table->string('password'); // Contraseña
            
            $table->timestamps(); // Agrega created_at y updated_at
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
    }
}
