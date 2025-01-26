<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Models;
use Illuminate\Http\Request;

class ModelsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = Models::all();
        return view('modeel');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idUsu' => 'required|integer',
            'fechaNacimiento' => 'required|date',
            'edad' => 'required|integer',
            'telefono' => 'required|string',
            'profesion' => 'required|string',
            'experiencia' => 'required|string',
            'descripcion' => 'required|string',
            'rh' => 'required|string',
            'colorPiel' => 'required|string',
            'disponibilidad' => 'required|string',
            'tarifaHora' => 'required|numeric',
        ]);
        Models::create($request->all());
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
