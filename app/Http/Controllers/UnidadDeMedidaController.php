<?php
namespace App\Http\Controllers;

use App\Models\UnidadDeMedida;
use Illuminate\Http\Request;

class UnidadDeMedidaController extends Controller
{
    public function index()
    {
        $unidadDeMedidas = UnidadDeMedida::paginate(5);
        return view('unidad_de_medida.index', compact('unidadDeMedidas'));
    }

    public function create()
    {
        return view('unidad_de_medida.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required']);
        UnidadDeMedida::create($request->all());
        return redirect()->route('unidad_de_medida.index')->with('success', 'Unidad de medida creada.');
    }

    public function show(UnidadDeMedida $unidadDeMedida)
    {
        return view('unidad_de_medida.show', compact('unidadDeMedida'));
    }

    public function edit(UnidadDeMedida $unidadDeMedida)
    {
        return view('unidad_de_medida.edit', compact('unidadDeMedida'));
    }

    public function update(Request $request, UnidadDeMedida $unidadDeMedida)
    {
        $request->validate(['nombre' => 'required']);
        $unidadDeMedida->update($request->all());
        return redirect()->route('unidad_de_medida.index')->with('success', 'Unidad de medida actualizada.');
    }

    public function destroy(UnidadDeMedida $unidadDeMedida)
    {
        $unidadDeMedida->delete();
        return redirect()->route('unidad_de_medida.index')->with('success', 'Unidad de medida eliminada.');
    }
}
