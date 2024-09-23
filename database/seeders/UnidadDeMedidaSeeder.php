<?php

namespace Database\Seeders;

use App\Models\UnidadDeMedida;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnidadDeMedidaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidad_de_medidas = [
            'kilogramo',
            'Litro',
            'Libra',
            'Gramos',
            'Onza',
        ];

        foreach($unidad_de_medidas as $unidad_de_medida){
            DB::table('unidad_de_medidas')->insert([
                'nombre' => $unidad_de_medida
            ]);
        }
    }
}
