<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getPosicionTop() { return $this->posicionTop; }
    public function getPosicionLeft() { return $this->posicionLeft; }
    public function getDescripcion() { return $this->descripcion; }
    public function getImagenId() { return $this->imagen_id; }

    public function getImagen(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
}
