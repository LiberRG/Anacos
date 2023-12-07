<?php

namespace Database\Seeders;

use App\Models\Paisaje;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaisajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Paisaje::firstOrCreate([
            'nombre' => 'Cuna da Moura',
        ],
        [
            'imagen_id' => 38,
            'direccion' => 'La roca se localiza en Outeiro Grande, en terrenos de la Comunidad de Montes da Rega dos Agros de Combarro.',
            'descripcion' => 'El espacio Natural Cuna da Moura se configura en torno a una singular peña cargada de folclore asociado a las leyendas de “mouras”.',
            'detalles' => 'Para la sociedad rural tradicional gallega las “mouras” y “mouros” eran los pobladores míticos de los castros, dólmenes, fuentes, ríos, ...
            Se trata de una peña de granito con una cavidad (pía) formada gracias a la erosión natural y en parte modelada artificialmente. Según la tradición, en la piedra vivía una “moura” que tenía una cinta y pedía a todas las personas que pasaban que tirasen de ella. Si se rompía desaparecía el encantamiento y el caminante recibiría riquezas a cambio.',
            'lugar_id' => '1'
        ]);
        Paisaje::firstOrCreate([
            'nombre' => 'Miradores do Loureiro y Campanario',
        ],
        [
            'imagen_id' => 39,
            'descripcion' => 'Lugares pintorescos con espectaculares vistas de toda la ría de Pontevedra. Se encuentran en la ruta del Camino Xacobeo portugués en su variante espiritual entre Combarro y Armenteira.',
            'detalles' => 'Estos dos miradores están situados muy próximos entre sí, a una altitud de 300 metros sobre el nivel del mar y se encuentran perfectamente acondicionados con plataformas de madera y cartelería. Desde ellos se puede observar una impresionante panorámica de la ría de Pontevedra con el conjunto histórico de Combarro a nuestros pies, Campelo y la ensenada de A Seca al este, Pontevedra, Marín y Bueu en el margen sur de la ría y en medio la silueta de la isla de Tambo.',
            'lugar_id' => '1'
        ]);
    }
}
