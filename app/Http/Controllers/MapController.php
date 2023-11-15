<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;

class MapController extends Controller
{
    public function index($lugar = null){
        $lugares = Lugar::all();
        if ($lugar != null) {
            $mapa = Lugar::where('nombre', $lugar)->rutaMapa;
            $id_lugar = Lugar::where('nombre', $lugar)->id;
            //$sitio = Sitio::where('id_lugar', $id_lugar);
        }
        
        return view('map.index', compact('lugares','lugar'));
        // return view('map.index', compact('lugares','mapa','sitio'));
    }
    
}
