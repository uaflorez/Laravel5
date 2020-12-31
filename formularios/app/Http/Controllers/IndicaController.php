<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicator;

class IndicaController extends Controller
{
    public function indicador(){
        $indicador = Indicator::all();
        return view('indicador', compact('indicador'));
    }

    public function store(Request $request){
                
        $newIndicator = new Indicator;
        $newIndicator->description = $request->input('indicador');
        // $newIndicator->compe_id = $competencias->input('nombre');
        $newIndicator->save();
        return redirect()->route('indicator');
        

    }
}
