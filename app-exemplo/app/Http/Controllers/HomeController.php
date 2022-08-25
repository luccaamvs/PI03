<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function home(){
    $resultado = ['Produto1', 'Produto2', 'Produto3'];
    return view('welcome')->with('produtos',$resultado);
  }
}
