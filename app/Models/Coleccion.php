<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Imagen;


class Coleccion extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return $this->id; }    
    public function getNombre() { return $this->nombre; }
    public function getDescripcion() { return $this->descripcion; }
    public function getImagenId() { return $this->imagen_id; }

    public function getImgPortada() {
        return $this->hasOne(Imagen::class, 'id', 'imagen_id');
    }
    public function getImagenesColeccion(){
        return $this->hasMany(Imagen::class, );
    }
}
