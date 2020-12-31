<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Indicator;
use App\Evaluado;

class IndicaController extends Controller
{
    public function indicador(){
        $indicador = Indicator::all();
        return view('indicador', compact('indicador'));
    }

    public function store(Request $request){
                
        $newIndicator = new Indicator;
        $newIndicator->description = $request->input('indicador');
        $newIndicator->save();
        return redirect()->route('indicator');
        

    }
}
