<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerController extends Controller
{
    // public function recibirPost(Request $request){
    //     // código de mi método
    //     $todos_los_datos = $request->all();
    //     // echo $request->input('id');
    // }
    public function __construct(){
        $this->middleware('domingo');
    }
}
