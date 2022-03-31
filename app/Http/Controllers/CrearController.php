<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Tipo;
use App\Models\Cine;


class CrearController extends Controller
{
    public function mostrarPeliculas(){
        $pelis = Pelicula::all();
        
        return view('index', ['pelicula'=>$pelis]);
    }


    ///// tipo peliculas  /////
    public function mostrarTipo(){
        $tipos = Tipo::all();
        $cines = Cine::all();
        return view('tipo', ['tipo'=>$tipos, 'cine'=>$cines]);
    }
    

    ///// datos peliculas /////
    public function datosPeliculas($id){
        $peliculas = $id;
        $peli = Pelicula::find($peliculas);

        $num = rand(0,20);
        $num2 = rand(0,20);
        $rand = Pelicula::find($num);
        $rand2 = Pelicula::find($num2);

        return view ('pelicula', ['pelicula'=>$peli, 'nuevo'=>$rand, 'nuevo2'=>$rand2]);
    }
}
