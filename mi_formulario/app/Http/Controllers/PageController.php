<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class PageController extends Controller
{
    public function inicio(){
        return view('welcome');
    }

    public function form(){
        return view('formulario');
    }
}
