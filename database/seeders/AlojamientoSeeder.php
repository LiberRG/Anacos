<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alojamiento;

class AlojamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alojamiento::firstOrCreate([
            'nombre' => 'Hotel Combarro',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 33,
            'telefono' => '(+34)986772131',
            'email' => 'hotelcombarro@hotelcombarro.es',
            'web' => 'www.hotelcombarro.es',
            'direccion' => 'Avenida de la Pinela S/N, 36995 Combarro, España',
            'descripcion' => 'Este establecimiento moderno y luminoso se encuentra en el corazón de la preciosa región costera de las Rías Baixas y resulta ideal para disfrutar del sol en familia.',
            'puntuacion' => 8.7,
            'detalles' => 'El hotel dispone de jardín con piscina y un bar cafetería. Además, la zona de los alrededores ofrece muchas actividades de ocio para toda la familia.

            El hotel está a solo 10 minutos a pie de la histórica ciudad de Combarro, un destino muy popular entre los artistas. También se encuentra a solo 800 metros de la playa y cerca de Sanxenxo, Vigo y la maravillosa península de O Grove.
            
            El hotel también dispone de conexión a internet WiFi.
            
            A las parejas les encanta la ubicación',
        ]);

        Alojamiento::firstOrCreate([
            'nombre' => 'Casa Noelmar',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 34,
            'telefono' => '(+34)986770588',
            'email' => 'noelmar@hotmail.es',
            'web' => 'www.casanoelmarcombarro.com',
            'direccion' => 'Rua da Laxe, 8 , 36994 Combarro, España',
            'descripcion' => 'La Casa Noelmar se encuentra en la localidad pesquera gallega de Combarro, a 5 minutos a pie del puerto deportivo.',
            'puntuacion' => 9.6,
            'detalles' => ' Esta casa de piedra de estilo rústico ofrece apartamentos con chimenea, ducha de hidromasaje y WiFi gratuita.

            Todos los apartamentos tienen vistas al mar y disponen de calefacción, patio amueblado, zona de barbacoa, sala de estar con TV de pantalla plana y sofá cama, baño privado con artículos de aseo, lavadora y cocina bien equipada.
            
            Cuenta con traslado al aeropuerto',
        ]);

        Alojamiento::firstOrCreate([
            'nombre' => 'Apartamentos Dabarca Combarro',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 35,
            'telefono' => '(+34)986869723',
            'email' => 'info@hoteldabarca.com',
            'web' => 'www.hoteldabarca.com',
            'direccion' => 'Rúa Baixada a Chousa, 36, 36993 Combarro, España',
            'descripcion' => 'Apartamentos Dabarca Combarro se encuentra en Combarro, a 6 min a pie de Praia do Padrón y a 1,4 km de Praia de Chancelas, y ofrece vistas al mar y wifi gratis.',
            'puntuacion' => 7.6,
            'detalles' => ' El alojamiento dispone de cocina totalmente equipada con nevera y cafetera, TV de pantalla plana y baño privado con ducha. Hay una zona de estar y de comedor en todas las unidades.

            Praia Ouriceira está a 2 km del alojamiento, y Praia Area da Barca está a 2,6 km. El aeropuerto más cercano (Aeropuerto de Vigo) está a 38 km del alojamiento.
            
            Ideal para familias',            
        ]);



        Alojamiento::firstOrCreate([
            'nombre' => 'Camping Islas Cíes',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 55,
            'telefono' => '(+34)986438358',
            'email' => 'info@campingislascies.com',
            'web' => 'www.campingislascies.com',
            'descripcion' => 'Para dormir, la única opción disponible es su camping en el que podrás llevar tu propia tienda o alquilar alguna de las que tienen disponibles (que incluyen una o dos camas).',
            'puntuacion' => 8.4,
            'detalles' => 'Si hay algo mejor que las Cíes de día, son las Cíes de noche. En verano, con el cielo despejado y un inmenso campo de estrellas en el firmamento, cada noche allí se convierte en una experiencia única. Además, el camping cuenta con cafetería, supermercado y salón social, haciéndote sentir como en casa.',
        ]);
    }
}
