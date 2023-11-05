<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
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
        return view('map.index', compact('lugares','lugar'));
    }
}
