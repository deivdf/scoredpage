<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            Schema::create('users', function (Blueprint $table) {
                $table->id('idUsu'); // Cambia el nombre del campo ID a idUsu
                $table->unsignedBigInteger('idRol'); // Clave foránea
                $table->string('nombre'); // Campo nombre
                $table->string('correo')->unique(); // Campo correo único
                $table->string('telefono'); // Campo teléfono
                $table->string('contraseña'); // Campo contraseña
                $table->string('rol'); // Campo rol

                $table->foreign('idRol')->references('idRol')->on('roles'); // Relación con la tabla roles
                $table->timestamp('fechaRegistro')->default(DB::raw('CURRENT_TIMESTAMP')); // Campo fechaRegistro con valor por defecto
            });
        }

        if (!Schema::hasTable('password_reset_tokens')) {
            Schema::create('password_reset_tokens', function (Blueprint $table) {
                $table->string('email')->primary();
                $table->string('token');
                $table->timestamp('created_at')->nullable();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
    }
}
