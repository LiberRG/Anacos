<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coleccion;

class InspiraController extends Controller
{
    public function index(){
        $collections =[
            ["id" => "01",
            "name"=>"Galiza máxica",
            "imgCollection" => "/img/juego1/2.jpg",
            "description"=> "Esta es una pequeña descripcion 1",
            "products" => ["/img/juego1/1.jpg", "/img/juego1/1.jpg", "/img/juego1/1.jpg","/img/juego1/1.jpg","/img/juego1/1.jpg"]
            ],
            
            ["id" => "02",
            "name"=>"Sons",
            "imgCollection" => "/img/juego1/2.jpg",
            "description"=> "Esta es una pequeña descripcion 2",
            "products" => ["/img/juego1/1.jpg", "/img/juego1/1.jpg", "/img/juego1/1.jpg","/img/juego1/1.jpg","/img/juego1/1.jpg"]
            ],
            
            ["id" => "03",
            "name"=>"Ollar da natureza",
            "imgCollection" => "/img/juego1/2.jpg",
            "description"=> "Esta es una pequeña descripcion 3",
            "products" => ["/img/juego1/1.jpg", "/img/juego1/1.jpg", "/img/juego1/1.jpg","/img/juego1/1.jpg","/img/juego1/1.jpg"]
            ],
            
            ["id" => "04",
            "name"=>"A liberdade do toxo",
            "imgCollection" => "/img/juego1/2.jpg",
            "description"=> "Esta es una pequeña descripcion 4",
            "products" => ["/img/juego1/1.jpg", "/img/juego1/1.jpg", "/img/juego1/1.jpg","/img/juego1/1.jpg","/img/juego1/1.jpg"]
            ],
            
            ["id" => "05",
            "name"=>"Combarro",
            "imgCollection" => "/img/juego1/2.jpg",
            "description"=> "En este evocador dibujo del mar, el artista captura la esencia tranquila y misteriosa del océano. La escena se despliega con tonos azules y verdes suaves, que se funden en un horizonte lejano y difuminado. Las olas del mar parecen cobrar vida con cada trazo.",
            "products" => ["/img/juego1/1.jpg", "/img/juego1/1.jpg", "/img/juego1/1.jpg","/img/juego1/1.jpg","/img/juego1/1.jpg"]
            ]
        ];
        $data = Coleccion::all();  

        return view('inspira.index', compact('data'));
    }
}
