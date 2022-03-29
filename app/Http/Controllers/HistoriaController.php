<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historia;

class HistoriaController extends Controller
{
    public function mostrarHistoria(){
        $historia = historia::find(1);
        return view('historia', ['historia'=>$historia]);
    }

    public function mostrarOrigen(){
        $origen = historia::find(2);
        return view('origen', ['origen'=>$origen]);
    }

    public function mostrarDigital(){
        $digital = historia::find(3);
        return view('digital', ['digital'=>$digital]);
    }
}
