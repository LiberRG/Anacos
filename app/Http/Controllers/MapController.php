<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;

class MapController extends Controller
{
    public function index($lugar = null){
        $lugares = Lugar::all();
        $mapa = null;
        $sitios= null;
        if ($lugar != null) {
            $lugar = Lugar::find($lugar);            
        }
        
        return view('map.index', compact('lugares','lugar'));
    }
    
}
