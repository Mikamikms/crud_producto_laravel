<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Producto 1',
                'marca_id' => 1, 
                'categoria_id' => 1,
                'unidad_de_medida_id' => 1,
                'precio_compra' => 50.00,
                'precio_venta' => 100.00,
            ],
            [
                'nombre' => 'Producto 2',
                'marca_id' => 2,
                'categoria_id' => 2,
                'unidad_de_medida_id' => 2,
                'precio_compra' => 30.00,
                'precio_venta' => 60.00,
            ],
            [
                'nombre' => 'Producto 3',
                'marca_id' => 1,
                'categoria_id' => 3,
                'unidad_de_medida_id' => 1,
                'precio_compra' => 20.00,
                'precio_venta' => 40.00,
            ],
        ];

        foreach($productos as $producto){
            DB::table('productos')->insert([
                'nombre' => $producto['nombre'],
                'marca_id' => $producto['marca_id'],
                'categoria_id' => $producto['categoria_id'],
                'unidad_de_medida_id' => $producto['unidad_de_medida_id'],
                'precio_compra' => $producto['precio_compra'],
                'precio_venta' => $producto['precio_venta'],
            ]);
        }
    }
}
