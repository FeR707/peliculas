<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tipo;
use App\Models\Cine;
use App\Models\Pelicula;


class Tipo extends Model
{
    use HasFactory;
    protected $table = 'tipos';

}
