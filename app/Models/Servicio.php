<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Restaurante;
use App\Models\Alojamiento;
use App\Models\TurismoOficina;
use App\Models\Tradicion;
use App\Models\Transporte;
use App\Models\Paisaje;

abstract class Servicio extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return null; }
    public function getImagenId() { return null; }
    public function getNombre() { return null; }
    public function getTelefono() { return null; }
    public function getEmail() { return null; }
    public function getWeb() { return null; }
    public function getFecha() { return null; }
    public function getDireccion() { return null; }
    public function getDescripcion() { return null; }
    public function getPuntuacion() { return null; }
    public function getDetalles() { return null; }
    public function getLugarId() { return null; }
    
    public function getImagen(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
}
