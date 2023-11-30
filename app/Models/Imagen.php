<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory; 
    public $timestamps = false; 
    public function getId() { return $this->id; }
    public function getRutaImg() { return $this->rutaImg; }
    public function getAlt() { return $this->alt; }
    public function getCategoria() { return $this->categoria; }
    public function getColeccionId() { return $this->coleccion_id; }
  
}
