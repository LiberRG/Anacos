<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empareja;

class DescubreController extends Controller
{
    public function empareja(){
        $dataJuego = [];
        $description = [];
        $data = Empareja::all();       
        foreach ($data as $key => $element) {
            $dataJuego[] = ["1-".$element->getId(), $element->getRutaImg()];
            $dataJuego[] = ["2-".$element->getId(), $element->getImgDibujo->getRutaImg()];
            $description[] = [$element->getId(), $element->getTitulo(), $element->getDescripcion()];
        }
        shuffle($dataJuego);
        
        return view('descubre.empareja', compact('dataJuego', 'description'));
    }

    public function encuentra(){
        $dataJuego = [
           ['title' => '¿Jugamos una sopa de letras?', 'description' => "Buscan cada una de las palabra que te proponemos. Pulsa sobre la primera letra de la palabra y sin soltar muevete hasta la ultima. \nSi es correcta la palabra cambiara de color."],
           ['title' => 'Chincheta', 'description' => 'Pequeña vara de madera con una punta metálica en un extremo que se utiliza para marcar el lugar donde se han colocado las nasas. Las NASAS son cestos de mimbre utilizados para atrapar pulpos y otros mariscos.'],
           ['title' => 'Gorse', 'description' => 'Gancho largo y estrecho con una punta que utilizan para extraer percebes de las rocas. Otro utensilio de la familia es el BIAÑO, gancho de hierro con forma de pico utilizado para extraer mejillones de las rocas.'],
           ['title' => 'Longa', 'description' => 'Utensilio largo de madera con una pala en un extremo y un diente en el otro que usan para extraer almejas.'],
           ['title' => 'Rañola', 'description' => 'Rastrillo que usan las mariscadoras para recoger berberecho. Entre los instrumentos de trabajo de las mariscadoras tambien podemos encontrar el MARVE, bolsa de red que se utiliza para transportar las almejas.'],
           ['title' => 'Tarrafa', 'description' => 'Red circular que se lanza al agua y se tira de ella para atrapar el pescado. Su uso está indicado sobre todo para peces de tamaño no muy grande, como la sardina, el jurel o el boquerón.'],           
           ['title' => 'Xabeca', 'description' => 'Cubo de madera utilizado para transportar el pescado fresco desde la embarcación hasta el puerto.'],           
           ['title' => 'Xacio', 'description' => 'Ser que posee la mitad inferior de un pez y la mitad superior humana, masculina o femenina. Les encanta el agua, y habitan en las pozas de los ríos. Se dice que varios de ellos habitan en el río miño. Aunque si hay una criatura de este tipo con nombre propio es MARUXIANA, vive en las islas de los Farillós y con su prodigiosa voz atraer a los marineros a su lar submarino para allí gozar de su compañía.'],

        ];
        
        return view('descubre.encuentra', compact('dataJuego'));
    }
}
