<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\ModelProfile;
use Illuminate\Http\Request;

class ModelsController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $models = ModelProfile::all();
        return view('models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'birth_date' => 'required|date',
        'age' => 'required|integer',
        'phone' => 'required|string',
        'profession' => 'nullable|string',
        'experience' => 'required|string',
        'description' => 'nullable|string',
        'blood_type' => 'required|string',
        'skin_color' => 'required|string',
        'availability' => 'required|boolean|sometimes',
        'hourly_rate' => 'required|numeric',
    ]);

    ModelProfile::create($request->all());
    
    return redirect()->route('models.index')->with('success', 'Modelo creado con éxito');

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $model = ModelProfile::findOrFail($id);
        return view('models.show', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $model = ModelProfile::findOrFail($id);
        return view('models.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'birth_date' => 'required|date',
            'age' => 'required|integer',
            'phone' => 'required|string',
            'profession' => 'nullable|string',
            'experience' => 'required|string',
            'description' => 'nullable|string',
            'blood_type' => 'required|string',
            'skin_color' => 'required|string',
            'availability' => 'required|boolean|sometimes',
            'hourly_rate' => 'required|numeric',
        ]);

        $model = ModelProfile::findOrFail($id);
        $model->update($request->all());

        return redirect()->route('models.index')->with('success', 'Modelo actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = ModelProfile::findOrFail($id);
        $model->delete();

        return redirect()->route('models.index')->with('success', 'Modelo eliminado con éxito');
    }
}
