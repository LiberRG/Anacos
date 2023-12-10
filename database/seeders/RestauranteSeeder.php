<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurante;

class RestauranteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Restaurante::firstOrCreate([
            'nombre' => 'Bar Pedramar',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 36,
            'telefono' => '(+34)986778143',
            'email' => 'pedramarbar@hotmail.com',
            'web' => 'www.facebook.com/barpedramar',
            'direccion' => 'Calle de la Rua, 49 Calle A Rua n°49, 36993 Combarro, España',
            'descripcion' => 'Bar restaurante de tapas para compartir con terraza vistas al mar en el centro historisco artistico de Combarro.',
            'puntuacion' => 9,
            'detalles' => 'RANGO DE PRECIOS: 3-90 €.
            TIPOS DE COCINA: Marisco, Mediterránea, Española, Saludable.
            DIETAS ESPECIALES: Opciones sin gluten.
            COMIDAS: Comidas, Cenas, Bebidas.   
            VENTAJAS: Terraza exterior, Televisión, Tronas disponibles, Sirve alcohol, Bar completo, Vino y cerveza, Acepta American Express, Acepta Mastercard, Acepta Visa, Pagos digitales, Acepta Discover, Acepta tarjetas de crédito, Servicio de mesa, Frente a una costa o ribera, Estilo familiar.',          
        ]);

        Restaurante::firstOrCreate([
            'nombre' => 'Restaurante Tinta Negra',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 37,
            'telefono' => '(+34)683308048',
            'email' => 'tintanegra.tapas@gmail.com',
            'web' => 'www.tintanegracombarro.com',
            'direccion' => 'Avenida de Francisco Regalado 44 Frente al puerto deportivo, 36993 Combarro España',
            'descripcion' => 'Bar restaurante de tapas para compartir con terraza vistas al mar',
            'puntuacion' => 8,
            'detalles' => ' TIPOS DE COCINA: Europea, Española.
             DIETAS ESPECIALES: Opciones vegetarianas, Opciones veganas, Opciones sin gluten.
            COMIDAS: Desayuno, Comidas, Cenas, Abierto hasta tarde, Bebidas.
            VENTAJAS: Reservas, Terraza exterior, Capacidad, Televisión, Tronas disponibles, Acceso para discapacitados, Sirve alcohol, Bar completo, Wifi gratuito, Acepta tarjetas de crédito, Servicio de mesa.',
        ]);



        Restaurante::firstOrCreate([
            'nombre' => 'Restaurante Rodas',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 56,
            'telefono' => '(+34)636659522',
            'email' => 'info@restauranterodas.es',
            'web' => 'restauranterodas.es',
            'direccion' => 'Camino C5 Illas Cies, 8, 36201 Vigo España',
            'descripcion' => 'Podemos encontrar opcion autoservicio o de carta. Sus servicios no están disponibles todo el año.',
            'puntuacion' => 5.8,
            'detalles' => 'TIPOS DE COCINA: Española.
            VENTAJAS: Capacidad, Sirve alcohol.',
        ]);
    }
}
