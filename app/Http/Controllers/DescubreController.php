<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empareja;

class DescubreController extends Controller
{
    public function juego1($lugar = null){
        $dataJuego = Empareja::all();
        $dataJuego = $dataJuego->shuffle();
        
        return view('descubre.juego1', compact('dataJuego'));
    }
}
