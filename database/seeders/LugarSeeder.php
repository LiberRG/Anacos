<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lugar;

class LugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lugar::firstOrCreate([
            'nombre' => 'combarro',
        ],
        [
            'provincia' => 'Pontevedra',
            'posicionTop' => 60.00,
            'posicionLeft' => 16.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);

        Lugar::firstOrCreate([
            'nombre' => 'illas cies',
        ],
        [
            'provincia' => 'Pontevedra',
            'posicionTop' => 66.00,
            'posicionLeft' => 10.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);

        Lugar::firstOrCreate([
            'nombre' => 'playa catedrales',
        ],
        [
            'provincia' => 'Lugo',
            'posicionTop' => 3.00,
            'posicionLeft' => 78.00,
            'rutaMapa' => 'img/mapas/map-combarro.png'
        ]);
    }
}