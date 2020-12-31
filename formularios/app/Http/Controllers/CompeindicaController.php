<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compeindica;
use App\Competencia;


class CompeindicaController extends Controller
{
    public function compeindica(){
        $indicador = Indicator::all();
        $competencias = Competencia::all();
        return view('compeindica', compact('competencias', 'indicador'));
    }

    public function store(Request $request){
                
        $newCompeindica = new Compeindica;
        $newCompeindica->compe_id = $request->input('ncompetencia');
        $newCompeindica->indica_id = $request->input('nindicador');

        $newCompeindica->save();

        return redirect()->route('compeindica');

    }
}
