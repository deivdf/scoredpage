<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProfile extends Model
{
    use HasFactory;

    protected $table = 'models'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria
    public $timestamps = false; 

    protected $fillable = [
        'birth_date',
        'age',
        'phone',
        'profession',
        'experience',
        'description',
        'blood_type',
        'skin_color',
        'availability',
        'hourly_rate',
    ];
}
