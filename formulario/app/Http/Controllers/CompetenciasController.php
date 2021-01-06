<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Competencia;

class CompetenciasController extends Controller
{
    public function index()
    {
        //$competencias = DB:: table('competencias')->select('id', 'nombre')->get();
        $competencias = Competencia::all();
        return view('competencias.index', compact('competencias'));
    }
     public function home()
    {
        return view('welcome');
    }
}
