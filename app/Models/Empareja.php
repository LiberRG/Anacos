<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Empareja extends Model
{
    use HasFactory;
    public function ImgDiseño(){
        return $this->HasOne(Imagen::class, 'id', 'imagen_id');
    }
}
