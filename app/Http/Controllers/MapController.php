<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use App\Models\Sitio;

class MapController extends Controller
{
    public function index($lugar = null){
        $lugares = Lugar::all();
        $mapa = null;
        $sitios= null;
        if ($lugar != null) {
            $lugar = Lugar::where('nombre', $lugar)->first();
            $sitios = $lugar->sitios;
        }
        
        return view('map.index', compact('lugares','lugar', 'sitios'));
    }
    
}
