<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        return view('home.index');
    }

    public function menu(){
        return view('home.menu');
    }

    public function opiniones(){
        return view('home.opiniones');
    }

   public function gost(){
    return view('home.product');

   }
    public function recetas(){
        return view('home.recetas');
    }

    public function nosotros(){
        return view('home.nosotros');
    }
    
    public function formulario(){
        return view('home.formulario');
    }

    public function store(){

    }










}






