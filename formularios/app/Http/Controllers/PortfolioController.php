<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            ['title'=> 'Proyect #1'],
            ['title'=> 'Proyect #2'],
            ['title'=> 'Proyect #3'],
            ['title'=> 'Proyect #4'],
        ];
        return view('portfolio', compact('portfolio'));
    }
}
