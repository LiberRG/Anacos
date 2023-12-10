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
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 38,
            'direccion' => 'La roca se localiza en Outeiro Grande, en terrenos de la Comunidad de Montes da Rega dos Agros de Combarro.',
            'descripcion' => 'El espacio Natural Cuna da Moura se configura en torno a una singular peña cargada de folclore asociado a las leyendas de “mouras”.',
            'detalles' => 'Para la sociedad rural tradicional gallega las “mouras” y “mouros” eran los pobladores míticos de los castros, dólmenes, fuentes, ríos, ...
            Se trata de una peña de granito con una cavidad (pía) formada gracias a la erosión natural y en parte modelada artificialmente. Según la tradición, en la piedra vivía una “moura” que tenía una cinta y pedía a todas las personas que pasaban que tirasen de ella. Si se rompía desaparecía el encantamiento y el caminante recibiría riquezas a cambio.',
        ]);
        Paisaje::firstOrCreate([
            'nombre' => 'Miradores do Loureiro y Campanario',
            'lugar_id' => 1,
        ],
        [
            'imagen_id' => 39,
            'descripcion' => 'Lugares pintorescos con espectaculares vistas de toda la ría de Pontevedra. Se encuentran en la ruta del Camino Xacobeo portugués en su variante espiritual entre Combarro y Armenteira.',
            'detalles' => 'Estos dos miradores están situados muy próximos entre sí, a una altitud de 300 metros sobre el nivel del mar y se encuentran perfectamente acondicionados con plataformas de madera y cartelería. Desde ellos se puede observar una impresionante panorámica de la ría de Pontevedra con el conjunto histórico de Combarro a nuestros pies, Campelo y la ensenada de A Seca al este, Pontevedra, Marín y Bueu en el margen sur de la ría y en medio la silueta de la isla de Tambo.',
        ]);

        Paisaje::firstOrCreate([
            'nombre' => 'Playa',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 58,
            'descripcion' => 'Las Islas Cíes cuentan con una gran variedad de playas que se encuentran repartidas alrededor de toda la costa de las tres islas. Cada una de ellas es un paraje único que merece ser visitado.',
            'detalles' => 'Tanto la riqueza de fauna y flora terrestre como la marina hacen de las Islas Cíes un lugar de gran riqueza. De sus playas, cabe resaltar la gran importancia de la playa de Rodas, considerada la mejor del mundo.',
        ]);
        Paisaje::firstOrCreate([
            'nombre' => 'De Ruta',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 59,
            'descripcion' => 'Cuenta con 4 magníficas rutas con las que podrás recorrer toda la isla. Su duración va desde los 45 minutos hasta la hora y media. Seas como seas, encontrarás una ruta hecha a tu medida, ya que cada una tiene un nivel de dificultad diferente.',
            'detalles' => 'Ruta del Faro de Cíes - Duración: 1:30h (solo ida), Desnivel: 175m. 
            Ruta del Faro da Porta - Duración: 1:00h (solo ida), Desnivel: 55m. 
            Ruta del Alto do Príncipe - Duración: 45min. (solo ida), Desnivel: 122m.
            Ruta del Faro do Peito - Duración: 1:00h (solo ida), Desnivel: 60m.',
        ]);
        Paisaje::firstOrCreate([
            'nombre' => 'Submarinismo o buceo',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 60,
            'descripcion' => 'Bucear en las Islas Cíes es una de las experiencias más increíbles que se pueden disfrutar en la ría de Vigo. Aquí te encontrarás flotando entre langostas, cangrejos, centollas, nécoras, y pulpos. La fauna marina gallega en todo su esplendor.',
            'detalles' => 'El medio marino representa aproximadamente el 85% del Parque Nacional Marítimo-Terrestre de las Islas Atlánticas de Galicia.
            Los fondos marinos del Parque Nacional están formados por cuatro capas bien diferenciadas: el primero formado por arena, el segundo por grava, el tercero por Maërl (un tipo de algas coralinas, donde se encuentran diferentes especies marinas) y la cuarta por elementos rocosos.
            Al acercarte a las rocas, verás percebes y mejillones, erizos de mar, enormes bosques de anémonas y hasta rodaballos, sollas y lenguados. Normalmente las aguas que rodean las Cíes también son visitadas por cetáceos.',
        ]);
        Paisaje::firstOrCreate([
            'nombre' => 'Observatorio de aves',
            'lugar_id' => 2,
        ],
        [
            'imagen_id' => 61,
            'descripcion' => 'Las aves marinas son una de las grandes atracciones de estas islas para los amantes de la naturaleza y del turismo ornitológico',
            'detalles' => 'Las especies más abundantes son la gaviota patiamarilla, con cerca 10.000 parejas reproductoras que constituyen una de las mayores colonias del mundo. Con 1.000 parejas reproductoras, el cormorán moñudo es la colonia más importante en el sudoeste de Europa.
            En las Cíes crían también, de una manera muy localizada, algunas parejas de pardela cenicienta gaviota oscura y paíños.
            También se pueden observar otras especies de aves, tales como alcatraz, azor, colimbo ártico, halcón peregrino, pardela pichoneta, gaviota reidora o el arao común. Un gran número de aves anidan, se alimentan, invernan o descansan de sus viajes migratorios en las aguas que rodean el archipiélago.',
        ]);

    }
}
