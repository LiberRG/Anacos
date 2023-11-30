<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return $this->id; }
    public function getImagenId() { return $this->imagen_id; }
    public function getNombre() { return $this->nombre; }
    public function getTelefono() { return $this->telefono; }
    public function getEmail() { return $this->email; }
    public function getWeb() { return $this->web; }
    public function getDireccion() { return $this->direccion; }
    public function getDescripcion() { return $this->descripcion; }
    public function getPuntuacion() { return $this->puntuacion; }
    public function getDetalles() { return $this->detalles; }
    public function getLugarId() { return $this->lugar_id; }

    public function getImagen(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
}
