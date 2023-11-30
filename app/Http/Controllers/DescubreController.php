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
            $dataJuego[] = ["1-".$element->getId(), $element->getRutaImg()];
            $dataJuego[] = ["2-".$element->getId(), $element->getImgDibujo->getRutaImg()];
            $description[] = [$element->getId(), $element->getTitulo(), $element->getDescripcion()];
        }
        shuffle($dataJuego);
        
        return view('descubre.juego1', compact('dataJuego', 'description'));
    }
}
