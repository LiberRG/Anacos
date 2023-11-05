<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViveController extends Controller
{
    public function index($lugar = null){
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
        $service=[
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
        return view('vive.index', compact('service', 'lugares'));
    }
}
