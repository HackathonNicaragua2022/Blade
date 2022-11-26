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

    // ACCESO A LA PAGINA DE INICIO
    
    public function index()
    {
        return view('listCategorías', compact('listCategorías'));
    }
}
