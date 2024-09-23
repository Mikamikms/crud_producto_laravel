<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Lácteos',
            'Frutas',
            'Verduras',
            'Galletas',
            'Caramelos',
            'Cereales',
            'Chocolates',
        ];

        foreach($categorias as $categoria){
            DB::table('categorias')->insert([
                'nombre' => $categoria
            ]);
        }
    }
}
