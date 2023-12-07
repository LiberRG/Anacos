<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sitio;

class SitioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sitio::firstOrCreate([
            'nombre' => 'Horreos',
            'lugar_id' => 1,
        ],
        [
            'posicionTop' => 15,
            'posicionLeft' => 8,
            'descripcion' => 'Hórreos del siglo XVIII, que son graneros de piedra construidos sobre pilotes. Se encuentran junto a la playa lo que combribuye a una visión única',
            'imagen_id' => 2,
        ]);
        Sitio::firstOrCreate([
            'nombre' => 'Puerto Marítimo',
            'lugar_id' => 1,
        ],
        [
            'posicionTop' => 57,
            'posicionLeft' => 55,
            'descripcion' => 'Pintoresco puerto, con sus pequeñas embarcaciones  y las vistas panorámicas de la ría que te robará el corazón.',
            'imagen_id' => 19,
        ]);
        Sitio::firstOrCreate([
            'nombre' => 'Rúa do Mar',
            'lugar_id' => 1,
        ],
        [
            'posicionTop' => 27,
            'posicionLeft' => 38,
            'descripcion' => 'Es la calle más visitada por los turistas en Combarro, pues aquí se encuentran un buen número de hórreos en el lado de la calle más cercano al mar. Se accede subiendo unos pocos peldaños que hay en la Paza Peirao da Chousa, en el extremo más cercano a la zona monumental de Combarro.',
            'imagen_id' => 23,
        ]);
        
    }
}