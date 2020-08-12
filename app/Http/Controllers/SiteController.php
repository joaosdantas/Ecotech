<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {                   
        return view('home.home');
    }

    public function QuemSomos()
    {                   
        return view('home.quem-somos');
    }

    public function comoFazemos()
    {                   
        return view('home.como-fazemos');
    }

    public function entrar()
    {                   
        return view('home.entrar');
    }

    public function cadastrar()
    {                   
        return view('cadastro.cadastrar');
    }

}
