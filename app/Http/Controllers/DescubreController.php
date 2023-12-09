<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empareja;
use App\Models\Encuentra;

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
        $dataJuego = Encuentra::all();
        return view('descubre.encuentra', compact('dataJuego'));
    }
}
