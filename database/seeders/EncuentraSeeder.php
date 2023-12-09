<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Encuentra;

class EncuentraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Encuentra::firstOrCreate(
            [
                'nombre' => '¿Jugamos una sopa de letras?',
            ],
            [
                'descripcion' => "Buscan cada una de las palabra que te proponemos. Pulsa sobre la primera letra de la palabra y sin soltar muevete hasta la ultima. \nSi es correcta la palabra cambiara de color.",
            ]
        );
        Encuentra::firstOrCreate([
            'nombre' => 'Chincheta', 
        ],
        [
            'descripcion' => 'Pequeña vara de madera con una punta metálica en un extremo que se utiliza para marcar el lugar donde se han colocado las nasas. Las NASAS son cestos de mimbre utilizados para atrapar pulpos y otros mariscos.',
            'imagen_id' => 48,
        ]);
        Encuentra::firstOrCreate( [
            'nombre' => 'Gorse', 
        ],
        [
            'descripcion' => 'Gancho largo y estrecho con una punta que utilizan para extraer percebes de las rocas. Otro utensilio de la familia es el BIAÑO, gancho de hierro con forma de pico utilizado para extraer mejillones de las rocas.',
            'imagen_id' => 49,
        ]);
        Encuentra::firstOrCreate( [
            'nombre' => 'Longa', 
        ],
        [
            'descripcion' => 'Utensilio largo de madera con una pala en un extremo y un diente en el otro que usan para extraer almejas.',
            'imagen_id' => 50,
        ]);
        Encuentra::firstOrCreate([
            'nombre' => 'Rañola', 
        ],
        [
            'descripcion' => 'Rastrillo que usan las mariscadoras para recoger berberecho. Entre los instrumentos de trabajo de las mariscadoras tambien podemos encontrar el MARVE, bolsa de red que se utiliza para transportar las almejas.',
            'imagen_id' => 51,]
        );
        Encuentra::firstOrCreate([
            'nombre' => 'Tarrafa', 
        ],
        [
            'descripcion' => 'Red circular que se lanza al agua y se tira de ella para atrapar el pescado. Su uso está indicado sobre todo para peces de tamaño no muy grande, como la sardina, el jurel o el boquerón.',
            'imagen_id' => 52,]
        );
        Encuentra::firstOrCreate([
            'nombre' => 'Xabeca', 
        ],
        [
            'descripcion' => 'Cubo de madera utilizado para transportar el pescado fresco desde la embarcación hasta el puerto.',
            'imagen_id' => 53,
        ]);
        Encuentra::firstOrCreate([
            'nombre' => 'Xacio', 
        ],
        [
            'descripcion' => 'Ser que posee la mitad inferior de un pez y la mitad superior humana, masculina o femenina. Les encanta el agua, y habitan en las pozas de los ríos. Se dice que varios de ellos habitan en el río miño. Aunque si hay una criatura de este tipo con nombre propio es MARUXIANA, vive en las islas de los Farillós y con su prodigiosa voz atraer a los marineros a su lar submarino para allí gozar de su compañía.',
            'imagen_id' => 54,
        ]);
        Encuentra::firstOrCreate();
    }
}
