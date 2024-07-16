<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    
    public function habitacions(){
        return $this->belongsToMany(Habitacion::class, 'habitacion_agencia');
    }
}
