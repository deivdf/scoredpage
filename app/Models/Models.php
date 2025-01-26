<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;

    protected $table = 'models'; // Nombre de la tabla

    protected $primaryKey = 'idModelo'; // Clave primaria
    public $timestamps = false; 

    protected $fillable = [
        'idUsu',
        'fechaNacimiento',
        'edad',
        'telefono',
        'profesion',
        'experiencia',
        'descripcion',
        'rh',
        'colorPiel',
        'disponibilidad',
        'tarifaHora',
    ];

    // Relación con la tabla users
    public function models()
    {
        return $this->hasMany(Models::class, 'idUsu', 'idUsu');
    }
}