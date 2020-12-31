<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluado;
use App\Indicator;

class FormController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function entrevista()
    {
        $indicador = Indicator::all();
        return view('entrevista', compact('indicador'));
    }

    public function store(Request $request)
    {
        $newEvaluado = new Evaluado;
        $newEvaluado->nombre = $request->input('nombre');
        $newEvaluado->cedula = $request->input('cedula');
        $newEvaluado->campaña = $request->input('campaña');
        $newEvaluado->ncampaña = $request->input('numero');
        $newEvaluado->fecha = $request->input('fecha');
        $newEvaluado->total = $request->input('total');
        $newEvaluado->fortaleza_prim = $request->input('fortaleza_pim');
        $newEvaluado->mejora_prim = $request->input('mejora_prim');
        $newEvaluado->cumple_prim = $request->input('cumple_prim');
        $newEvaluado->no_cumple_prim = $request->input('no_cumple_prim');
        $newEvaluado->consideracion_prim = $request->input('consideracion_prim');
        $newEvaluado->fortaleza_seg = $request->input('fortaleza_seg');
        $newEvaluado->mejora_seg = $request->input('mejora_seg');
        $newEvaluado->cumple_seg = $request->input('cumple_seg');
        $newEvaluado->no_cumple_seg = $request->input('no_cumple_seg');
        $newEvaluado->consideracion_seg = $request->input('consideracion_seg');
        $newEvaluado->save();
        return redirect()->route('entrevista');
    }
       
}
