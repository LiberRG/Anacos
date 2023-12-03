<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Imagen;

class Empareja extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return $this->id; }
    public function getImagenId() { return $this->imagen_id; }
    public function getRutaImg() { return $this->rutaImg; }
    public function getDescripcion() { return $this->descripcion; }
    public function getTitulo() { return $this->titulo; }

    public function getImgDibujo(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
}
