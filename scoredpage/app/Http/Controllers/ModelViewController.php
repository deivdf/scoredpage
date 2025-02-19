<?php

namespace App\Http\Controllers;

use App\Models\models;
use Illuminate\Http\Request;

class ModelViewController extends Controller
{
    // Mostrar la lista de modelos
    public function index()
    {
        $modelos = Models::all(); // Obtener todos los modelos
        return view('models');
    }

    // Mostrar el perfil de un modelo específico
    public function show($id)
    {
        $modelo = Modelo::findOrFail($id); // Buscar el modelo por ID
        return view('modelos.show');
    }
}