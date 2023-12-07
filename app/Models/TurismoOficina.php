<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Imagen;

class TurismoOficina extends Servicio
{
    public function getId() { return $this->id; }
    public function getImagenId() { return $this->imagen_id; }
    public function getNombre() { return $this->nombre; }
    public function getTelefono() { return $this->telefono; }
    public function getDireccion() { return $this->direccion; }
    public function getDescripcion() { return $this->descripcion; }
    public function getDetalles() { return $this->detalles; }
    public function getLugarId() { return $this->lugar_id; }
}
