<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\ImagensProjeto;
use App\AssociadosProjeto;

class ProjetoController extends Controller
{
    public function index()
    {
    $projetos = Projeto::all();
    return view('cadastro.cadastrarProjeto', compact('projetos'));
    }

    public function store(Request $request)    
    {
        //dd($request->all());

        Projeto::create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'colaboradores'=>$request->colaboradores,
            'captacao'=>$request->captacao,
            'parcerias'=>$request->parcerias,
            'interesses'=>$request->interesses,
                       
        ]);

        return view('feed', );


    }
}
