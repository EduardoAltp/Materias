<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::latest()->paginate(10);
        return view('index', compact('materias'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'   => 'required|string|max:255',
            'creditos' => 'required|integer|min:0|max:20',
            'profesor' => 'required|string|max:255',
        ]);

        Materia::create($datos);

        return redirect()->route('materias.index')
            ->with('success', 'Materia creada correctamente.');
    }

    public function show(Materia $materia)
    {
        //
    }

    public function edit(Materia $materia)
    {
        //
    }

    public function update(Request $request, Materia $materia)
    {
        //
    }

    public function destroy(Materia $materia)
    {
        //
    }
}