<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function api(){
        $cliente = new \GuzzleHttp\Client();
        $response = $cliente->request('GET', 'https://api.agify.io/?name=');
        $datos = json_decode($response->getBody()->getContents(), true);

        return view('api', ['datos'=>$datos]);
    }
}
