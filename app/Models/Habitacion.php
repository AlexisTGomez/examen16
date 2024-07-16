<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function agencias(){
        return $this->belongsToMany(Agencia::class, 'habitacion_agencia');
    }

    
    public function particulars(){
        return $this->belongsToMany(Particular::class, 'particual_habitacion');
    }
}
