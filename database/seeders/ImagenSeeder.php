<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Imagen;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Horeo
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/horreo/1.png',
        ],
        [
            'alt' => 'Estampado de horreos en pinta azul sobre papel blanco',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/horreo/2.png',
        ],
        [
            'alt' => 'Lamina estampada fotografia de un horreo en pinta azul sobre papel blanco',
            'coleccion_id' => 1,

        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/horreo/3.png',
        ],
        [
            'alt' => 'Estampado de horreos en pinta azul sobre cartón marrón',
            'categoria' => 'juego',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/horreo/4.png',
        ],
        [
            'alt' => 'Libreta con estampado de horreos en pinta azul sobre cartón marrón',
            'coleccion_id' => 1,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/horreo/5.png',
        ],
        [
            'alt' => 'Exposicion de bolsa, camiseta y tapón de horreo',
            'coleccion_id' => 1,
        ]);
        
        //Solpor
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/solpor/1.png',
        ],
        [
            'alt' => 'Lamina a base de rectangulos de colores que muestran el atardecer sobre una playa de manera pixelada',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/solpor/2.png',
        ],
        [
            'alt' => 'Ilustración digital de una puesta de sol sobre la isla de Tambo',
            'coleccion_id' => 2,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/solpor/3.png',
        ],
        [
            'alt' => 'Ilustración digital de una puesta de sol desde la isla de Tambo',
            'coleccion_id' => 2,
        ]);
        
        //Naturaleza
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/natureza/1.png',
        ],
        [
            'alt' => 'Estampado sobre tela en tonos azulez. Ferreiriño real sobre rama de carballo',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/natureza/2.png',
        ],
        [
            'alt' => 'Estampado sobre tela en tonos ocres y verdes. Pañuelo con estampado a manchas de color que representan la flor del tojo.',
            'coleccion_id' => 3,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/natureza/3.png',
        ],
        [
            'alt' => 'Estampado sobre tela, en tonos rojos, amarillos, azules y verdes. Camelias de colores con hojas',
            'coleccion_id' => 3,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/natureza/4.png',
        ],
        [
            'alt' => 'Estampado sobre tela en tonos azulez. Hojas de carballo en disposición de rombo',
            'coleccion_id' => 3,
        ]);

        //Mar
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/mar/1.png',
        ],
        [
            'alt' => 'Estampado sobre tela en tonos azulez. Conjunto de percebes sobre roca dispuestos en diferentes direciones.',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/mar/2.png',
        ],
        [
            'alt' => 'Ilustración digital pared de conchas, en tonos azules y ocres.',
            'coleccion_id' => 4,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/mar/3.png',
        ],
        [
            'alt' => '',
            'coleccion_id' => 4,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/mar/4.png',
        ],
        [
            'alt' => '',
            'coleccion_id' => 4,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/mar/5.png',
        ],
        [
            'alt' => 'Estamparo sobre corcho, en tonos azules.Conjunto de cuatro posavasos en corcho, con estampado de conjunto de percebes, gaita, horreo y torre de Hércules',
            'coleccion_id' => 4,
        ]);
        
        //Salitre
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/salitre/1.png',
        ],
        [
            'alt' => 'Lamina de una gamela en el agua, tonos azules y marrones',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/salitre/2.png',
        ],
        [
            'alt' => 'Ilustración digital del puerto deportivo de Combarro desde el paseo',
            'coleccion_id' => 5,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/salitre/3.png',
        ],
        [
            'alt' => 'Camiseta con barco perquero con rayas en tonos azules',
            'coleccion_id' => 5,
        ]);
        
        //Combarro
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/1.png',
        ],
        [
            'alt' => 'Ilustración digital de la isla de Tambo',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/2.png',
        ],
        [
            'alt' => 'Lamina del puerto de Combarro estampado con tinta azul',
            'coleccion_id' => 6,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/3.png',
            'alt' => 'Lamina del puerto de Combarro estampado con tinta azul y marrón',
            'coleccion_id' => 6,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/4.png',
        ],
        [
            'alt' => 'Ilustración digital puerto de Combarro estampado con tinta azul',
            'coleccion_id' => 6,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/5.png',
        ],
        [
            'alt' => 'Sudadera con estampado de la playa de Combarro',
            'coleccion_id' => 6,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/combarro/5.png',
        ],
        [
            'alt' => 'Sudadera con estampado de la ista de Tambo',
            'coleccion_id' => 6,
        ]);
        
        //Caleidoscopio
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/1.png',
        ],
        [
            'alt' => 'Barcos de vela en el agua, con tonos azules y ocres. Pintura al oleo sobre tela',
            'categoria' => 'portada',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/2.png',
        ],
        [
            'alt' => 'Gamelas en el agua representadas por manchas de color, en tono azul y ocre. Pintura al oleo sobre papel',
            'coleccion_id' => 7,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/3.png',
        ],
        [
            'alt' => 'Gamelas en el agua representadas por manchas de color, en tono azul y ocre. Acuarela sobre papel',
            'coleccion_id' => 7,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/4.png',
        ],
        [
            'alt' => 'Triptico de gamela en el agua representadas por manchas de color, en tono azul y ocre. Acuarela sobre papel',
            'coleccion_id' => 7,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/5.png',
        ],
        [
            'alt' => 'Triptico de gamela en el agua representadas por manchas de color, en tono azul y ocre. Acuarela sobre papel',
            'coleccion_id' => 7,
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/colecciones/caleidoscopioAzul/6.png',
        ],
        [
            'alt' => 'Triptico de gamela en el agua representadas por manchas de color, en tono azul y ocre. Acuarela sobre papel',
            'coleccion_id' => 7,
        ]);

        //Servicios
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/hotel_combarro.png',
        ],
        [
            'alt' => 'Imagen de una habitación de hotel con dos camas individuales',
            'categoria' => 'servicios',
        ]);
        
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/casa_noelmar.png',
        ],
        [
            'alt' => 'Imagen nocturna exterior de una casa de tres plantes de piedra',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/apartamentos_dabarca_combarro.png',
        ],
        [
            'alt' => 'Imagen nocturna exterior de una casa de tres plantes de piedra',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/tintanegra.png',
        ],
        [
            'alt' => 'Interior del restaurante, en madera y piedra con estructura vista',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/pedramar.png',
        ],
        [
            'alt' => 'Mesa con servicios y copas en primer plano y el mar en el fondo',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/turismo_combarro.png',
        ],
        [
            'alt' => 'Exterior de una playa de Combarro con las casas pegadas a la arena y varios horreos',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/cuna_moura_combarro.png',
        ],
        [
            'alt' => 'Paisaje exterior de un bosque con una piedra perforada en primer plano.',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/mirador_loureiro_combarro.png',
        ],
        [
            'alt' => 'Visión de la ría de Pontevedra desde un alto, entre los árboles del bosque',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/buses_combarro.png',
        ],
        [
            'alt' => 'Hombre con gorra entrando en un autobus de las rias baixas',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/aparcamiento_combarro.png',
        ],
        [
            'alt' => 'Visión lejana del puerto de Combarro desde la plaza del Paseo de As Redeiras',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/san_roque_combarro.png',
        ],
        [
            'alt' => 'Exterior nocturno de una plaza con gente bailando bajo varias guirnaldas de luces de fiesta',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/virgen_carmen_combarro.png',
        ],
        [
            'alt' => 'Exterior de un barco adornado con flores y banderas, donde un grupo de hombres levantan un paso para introducirlo en la embarcación',
            'categoria' => 'servicios',
        ]);
        Imagen::firstOrCreate([
            'rutaImg' => 'img/servicios/armadiña_combarro.png',
        ],
        [
            'alt' => 'Cartel con fondo verde y una señora tocando el bombo, la gaita y la pandereta (mujer osquesta) donde se puede leer "Armadiña Combarro"',
            'categoria' => 'servicios',
        ]);


        
    }
}
