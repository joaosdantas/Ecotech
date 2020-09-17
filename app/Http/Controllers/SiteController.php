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

    public function cadastrar1()
    {                   
        return view('cadastro.cadastro-etapa-1');
    }
    
    public function cadastrar2()
    {                   
        return view('cadastro.cadastro-etapa-2');
    }
    public function cadastrar3()
    {                   
        return view('cadastro.cadastro-etapa-3');
    }
    public function cadastrar4()
    {                   
        return view('cadastro.cadastro-etapa-4');
    }
    public function cadastrar5()
    {                   
        return view('cadastro.cadastro-etapa-5');
    }
    public function cadastrar6()
    {                   
        return view('cadastro.cadastro-etapa-6');
    }
    public function cadastrar7()
    {                   
        return view('cadastro.cadastro-etapa-7');
    }
    public function cadastrar8()
    {                   
        return view('cadastro.cadastrarProjeto');
    }
    public function cadastroProjeto()
    {                   
        return view('cadastro.cadastroProjeto');
    }
    public function cadastroPessoa()
    {                   
        return view('cadastro.cadastro-pessoa-1');
    }

    public function perfil()
    {                   
        return view('perfil');
    }
    public function feed()
    {                   
        return view('feed');
    }

}
