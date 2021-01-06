<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicador;

class IndicadoresController extends Controller
{
    public function index()
    {
        //$competencias = DB:: table('competencias')->select('id', 'nombre')->get();
        $indicadores = Indicador::all();
        return view('indicador.index', compact('indicadores'));
    }
     public function show()
    {
        return view('indicador.show');
    }
}
