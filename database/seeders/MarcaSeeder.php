<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marcas = [
            'Gloria',
            'Laive',
            'Pilsen',
            'Oreo',
            'Inka Kola',
            'Coca Cola',
            'Fanta',
            'Pura Vida',
            'San Jorge',
            'San Roque',
            'Lays',
            'Doña Gusta',
        ];

        foreach($marcas as $marca){
            DB::table('marcas')->insert([
                'nombre'=> $marca
            ]);
        }
    }
}
