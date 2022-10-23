<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function __invoke()
    {
        /*Mostrar la vista de inicio*/
        return view('inicio');
    }
}
