<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function habitacions(){
        return $this->hasMany(Habitacion::class);
    }
    public function categorias(){
        return $this->hasMany(Categoria::class);
    }
}
