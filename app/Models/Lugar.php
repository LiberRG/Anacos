<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Sitio;

class Lugar extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function getId() { return $this->id; }
    public function getNombre() { return $this->nombre; }
    public function getProvincia() { return $this->provincia; }
    public function getPosicionTop() { return $this->posicionTop; }
    public function getPosicionLeft() { return $this->posicionLeft; }
    public function getRutaMap() { return $this->rutaMap; }

    public function sitios(){
        return $this->hasMany(Sitio::class);
    }
}
