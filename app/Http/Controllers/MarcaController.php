<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::paginate(5);
        return view('marca.index', compact('marcas'));
    }

    public function create()
    {
        return view('marca.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required']);
        Marca::create($request->all());
        return redirect()->route('marca.index')->with('success', 'Marca creada.');
    }

    public function show(Marca $marca)
    {
        return view('marca.show', compact('marca'));
    }

    public function edit(Marca $marca)
    {
        return view('marca.edit', compact('marca'));
    }

    public function update(Request $request, Marca $marca)
    {
        $request->validate(['nombre' => 'required']);
        $marca->update($request->all());
        return redirect()->route('marca.index')->with('success', 'Marca actualizada.');
    }

    public function destroy(Marca $marca)
    {
        $marca->delete();
        return redirect()->route('marca.index')->with('success', 'Marca eliminada.');
    }
}
