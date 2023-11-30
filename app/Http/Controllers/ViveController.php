<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lugar;
use App\Models\Restaurante;
use App\Models\Alojamiento;

class ViveController extends Controller
{
    public function index($filtro= null, $lugar = null){
        $lugares = [
            ["id" => "01",
            "name" => "Combarro",
            "top" => "60",
            "left" => "16"],
            
            ["id" => "02",
            "name" => "Illas Cies",
            "top" => "66",
            "left" => "10"],
            
            ["id" => "03",
            "name" => "Playa catedrales",
            "top" => "3",
            "left" => "78"]
        ];
        $lugares = Lugar::all();
        
        $ser=[
            "pathImg" => "/img/juego1/4.jpg",
            "title" => "titulo",
            "description" => "description",
            "date" => " f ",
            "contact" => [
            "telefono" => "+34 111 222 444 555",
            "email" => "email@email.com",
            ],
            "details"=> [
            "text" => "",
            "email" => "email@email.com",
            "web" => "www.web.com",
            "direction" => "calle cp y provincia",
            "score" => 3,
            ],
        ];

        if(isset($filtro)){
            switch ($filtro) {
                case 'restaurante':
                    $services = Restaurante::all();
                    break;
                
                case 'alojamiento':
                    $services = Alojamiento::all();
                    break;
                
                default:
                    $services = Alojamiento::all();
                    break;
            }
        }
        return view('vive.index', compact('services', 'lugares'));
    }
}
