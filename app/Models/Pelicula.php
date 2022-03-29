<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo;
use App\Models\Cine;
use App\Models\Pelicula;

class Pelicula extends Model
{
    use HasFactory;
    protected $table = 'peliculas';
    
    public function Tipo(){
        return $this->belongsTo('App\Models\Tipo');
    }

    public function Cine(){
        return $this->belongsTo('App\Models\Cine');
    }
}
