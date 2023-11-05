<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescubreController extends Controller
{
    public function juego1($lugar = null){
        $dataJuego1 = [
            ["/img/juego1/1.jpg",
            "/img/juego1/1.jpg",
            "<b>Descripcion:</b><br>Esta es una pequeña descripcion 1"],
            
            ["/img/juego1/2.jpg",
            "/img/juego1/2.jpg",
            "<b>Descripcion:</b><br>Esta es una pequeña descripcion 2"],
            
            ["/img/juego1/3.jpg",
            "/img/juego1/3.jpg",
            "<b>Descripcion:</b><br>Esta es una pequeña descripcion 3"],
            
            ["/img/juego1/4.jpg",
            "/img/juego1/4.jpg",
            "<b>Descripcion:</b><br>Esta es una pequeña descripcion 4"],];
        return view('descubre.juego1', compact('dataJuego1'));
    }
}
