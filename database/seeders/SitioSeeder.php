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
            'posicionTop' => 61,
            'posicionLeft' => 60,
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
        


        Sitio::firstOrCreate([
            'nombre' => 'Faro Monte do faro',
            'lugar_id' => 2,
        ],
        [
            'posicionTop' => 14,
            'posicionLeft' => 40.5,
            'descripcion' => 'Situado a 178 metros de altura sobre el nivel del mar y brindando a todo el que lo visita unas impresionantes vistas del parque natural, a día de hoy sigue realizando su función marítima como desde hace más de 150 años.',
            'imagen_id' => 45,
        ]);
        Sitio::firstOrCreate([
            'nombre' => 'Faro de Peito',
            'lugar_id' => 2,
        ],
        [
            'posicionTop' => 47.5,
            'posicionLeft' => 82,
            'descripcion' => 'Construido en 1904 marca la entrada norte a la Ría de Vigo. Es el punto del archipiélago más cercano al continente, el visitante tiene una vista privilegiada a la Costa da Vela, con la mirada apuntando al norte, también es posible ver el archipiélago de Ons.',
            'imagen_id' => 46,
        ]);
        Sitio::firstOrCreate([
            'nombre' => 'Playa de Rodas',
            'lugar_id' => 2,
        ],
        [
            'posicionTop' => 49,
            'posicionLeft' => 50,
            'descripcion' => 'La mejor playa del mundo, o al menos eso dicen. Sin duda es una paraje espectacular que debe ser visitado. Sus aguas cristalinas color turquesa, arena blanca y fina; y los bosques y dunas que la rodean hacen de este lugar un paraíso.',
            'imagen_id' => 47,
        ]);
    }
}