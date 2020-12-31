<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Competencia;

class CompeController extends Controller
{
    public function competencia(){
        $competencias = Competencia::all();
        return view('competencia', compact('competencias'));
    }

    public function store(Request $request){
                
        $newCompetencia = new Competencia;
        $newCompetencia->nombre = $request->input('competencia');
        $newCompetencia->save();

        return redirect()->route('competencia');

    }


}
