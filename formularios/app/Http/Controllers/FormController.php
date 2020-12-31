<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evaluado;

class FormController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function entrevista()
    {
        return view('entrevista');
    }

    public function store(Request $request)
    {
        $newEvaluado = new Evaluado;
        $newEvaluado->nombre = $request->input('nombre');
        $newEvaluado->cedula = $request->input('cedula');
        $newEvaluado->campaña = $request->input('campaña');
        $newEvaluado->ncampaña = $request->input('numero');
        $newEvaluado->total = $request->input('total');
        $newEvaluado->fortaleza_prim = $request->input('fortalezas');
        $newEvaluado->mejora_prim = $request->input('mejoras');
        $newEvaluado->cumple_prim = $request->input('cumple');
        $newEvaluado->no_cumple_prim = $request->input('no cumple');
        $newEvaluado->consideracion_prim = $request->input('consideracion');
        $newEvaluado->fortaleza_seg = $request->input('fortalezas');
        $newEvaluado->mejora_seg = $request->input('mejoras');
        $newEvaluado->cumple_seg = $request->input('cumple');
        $newEvaluado->no_cumple_seg = $request->input('no cumple');
        $newEvaluado->consideracion_seg = $request->input('consideracion');
        $newEvaluado->save();

        return redirdect()->route('home')->whit('info','Formulario creado exitosamente');
    }

   
}
