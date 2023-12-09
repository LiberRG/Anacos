<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coleccion;

class InspiraController extends Controller
{
    public function index(){
        $data = Coleccion::all();  

        return view('inspira.index', compact('data'));
    }
}
