<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    public function index(){
        $hola = "Hola Mundo!!";
        return view("welcome",compact("hola"));
    }
}
