<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usuPermitidoController extends Controller
{
    public function __construct(){

        $this->middleware('permiso');
    }

    public function acceso(){
        return view('permitido');
    }
}
