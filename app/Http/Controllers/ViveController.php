<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use App\Models\Servicio;
use App\Models\Restaurante;
use App\Models\Alojamiento;
use App\Models\TurismoOficina;
use App\Models\Tradicion;
use App\Models\Transporte;
use App\Models\Paisaje;

class ViveController extends Controller
{
    public function index($filtrar = 0, $lg = null)
    {
        $lugares = Lugar::all(); 
        $lugar= null;       

        if (isset($filtrar)) {
            switch ($filtrar) {
                case config('web.KEY_ALOJAMIENTO'):
                    $class = Alojamiento::class;
                    break;
                case config('web.KEY_SERVICIOS_TURISTICOS'):
                    $class =  TurismoOficina::class;
                    break;
                case config('web.KEY_COMO_LLEGAR'):
                    $class = Transporte::class;
                    break;
                case config('web.KEY_CULTURA_Y_TRADICIONES'):
                    $class = Tradicion::class;
                    break;
                case config('web.KEY_SABORES_DEL_LUGAR'):
                    $class = Restaurante::class;
                    break;
                case config('web.KEY_PAISAJES'):
                    $class = Paisaje::class;
                    break;
            }            
        }
        $services = $class::all();
        if(isset($lg)){
            $lugar= Lugar::find($lg);
            $services = $class::where('lugar_id', $lg)->get();
            // $services->
        }
        return view('vive.index', compact('filtrar', 'lugar', 'lugares', 'services'));
    }
}

// switch ($filtrar) {
//     case config('web.KEY_ALOJAMIENTO'):
//         $services = Alojamiento::all();
//         break;
//     case config('web.KEY_SERVICIOS_TURISTICOS'):
//         $services =  TurismoOficina::all();
//         break;
//     case config('web.KEY_COMO_LLEGAR'):
//         $services = Transporte::all();
//         break;
//     case config('web.KEY_CULTURA_Y_TRADICIONES'):
//         $services = Tradicion::all();
//         break;
//     case config('web.KEY_SABORES_DEL_LUGAR'):
//         $services = Restaurante::all();
//         break;
//     case config('web.KEY_PAISAJES'):
//         $services = Paisaje::all();
//         break;
// }   
