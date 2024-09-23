<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\UnidadDeMedida;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['marca', 'categoria', 'unidadDeMedida'])->paginate(5);
        return view('producto.index', compact('productos'));
    }

    public function create()
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $unidadDeMedidas = UnidadDeMedida::all();
        return view('producto.create', compact('marcas', 'categorias', 'unidadDeMedidas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'marca_id' => 'required|exists:marcas,id',
            'categoria_id' => 'required|exists:categorias,id',
            'unidad_de_medida_id' => 'required|exists:unidad_de_medidas,id',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
        ]);

        Producto::create($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto creado.');
    }

    public function show(Producto $producto)
    {
        return view('producto.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $unidadDeMedidas = UnidadDeMedida::all();
        return view('producto.edit', compact('producto', 'marcas', 'categorias', 'unidadDeMedidas'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'marca_id' => 'required|exists:marcas,id',
            'categoria_id' => 'required|exists:categorias,id',
            'unidad_de_medida_id' => 'required|exists:unidad_de_medidas,id',
            'precio_compra' => 'required|numeric',
            'precio_venta' => 'required|numeric',
        ]);

        $producto->update($request->all());
        return redirect()->route('producto.index')->with('success', 'Producto actualizado.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index')->with('success', 'Producto eliminado.');
    }
}
