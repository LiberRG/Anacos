<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lugar extends Model
{
    use HasFactory;
    public function sitios(){
        return $this->hasMany(Sitio::class);
    }
}