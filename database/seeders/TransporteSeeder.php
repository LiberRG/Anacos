<?php

namespace Database\Seeders;

use App\Models\Transporte;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transporte::firstOrCreate([
            'nombre' => 'Transporte Publico',
        ],
        [
            'imagen_id' => 40,
            'telefono' => '(+34)988687800',
            'web' => 'www.bus.gal/gl/descargas/concellos',
            'descripcion' => 'Horario de contacto:
            L-V: 08:00h-20:00h 
            S: 8:00h-14:00h',
            'lugar_id' => '1'
        ]);

        Transporte::firstOrCreate([
            'nombre' => 'Donde aparcar',
        ],
        [
            'imagen_id' => 41,
            'descripcion' => 'Aparcamiento de Combarro (Paseo de As Redeiras, Parking Club Náutico de Combarro (pago) y exterior del Colegio Público de Chancelas)',
            'lugar_id' => '1'
        ]);

    }
}
