<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Coleccion extends Model
{
    use HasFactory;
    public function imgPortada(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
    public function imgCollection(){
        return $this->hasMany(Imagen::class);
    }
}
