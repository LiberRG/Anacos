<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empareja;

class DescubreController extends Controller
{
    public function juego1($lugar = null){
        $dataJuego = [];
        $description = [];
        $data = Empareja::all();   
        //$dataJuego = $dataJuego->shuffle();     
        foreach ($data as $key => $element) {
            $dataJuego[] = ["1-".$element->id, $element->rutaImg];
            $dataJuego[] = ["2-".$element->id, $element->imgDibujo->rutaImg];
            $description[] = [$element->id, $element->titulo, $element->descripcion];
        }
        shuffle($dataJuego);
        
        return view('descubre.juego1', compact('dataJuego', 'description'));
    }
}
