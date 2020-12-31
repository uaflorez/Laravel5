<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compeindica;

class CompeindicaController extends Controller
{
    public function compeindica(){
        $compeindica = Compeindica::all();
        return view('compeindica', compact('compeindica'));
    }

    public function store(Request $request){
                
        $newCompeindica = new Compeindica;
        $newCompeindica->compe_id = $request->input('ncompetencia');
        $newCompeindica->indica_id = $request->input('nindicador');

        $newCompeindica->save();

        return redirect()->route('compeindica');

    }
}
