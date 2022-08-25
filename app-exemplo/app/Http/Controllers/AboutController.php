<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about(){
        $resultado = ['Produto1', 'Produto2', 'Produto3'];
        return view('about')->with('produtos',$resultado);
      }
}
