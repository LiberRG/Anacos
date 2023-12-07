<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coleccion;

class ColeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Coleccion::firstOrCreate([
            'nombre' => 'Horreo',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 1,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Solpor',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 6,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Ollar da natureza',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 9,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Froitos do mar',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 13,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Salitre',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 18,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Combarro',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 21,
        ]);

        Coleccion::firstOrCreate([
            'nombre' => 'Caleidoscopio azul',
            'descripcion' => 'Esta es una pequeña descripcion 2',
        ],
        [
            'imagen_id' => 26,
        ]);
    }
}
