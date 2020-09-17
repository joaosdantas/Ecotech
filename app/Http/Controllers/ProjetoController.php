<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;
use App\ImagensProjeto;
use App\AssociadosProjeto;

class ProjetoController extends Controller
{
    public function create()
    {
    $usuarios = Projeto::all();
    return view('cadastro.cadastroProjeto', compact('projetos'));
    }

    public function store(Request $request)    
    {
        dd($request->all());

        Usuario::create([
            'titulo'=>$request->titulo,
            'descricao'=>$request->descricao,
            'colaboradores'=>$request->colaboradores,
            'captacao'=>$request->captacao,
            'parcerias'=>$request->parcerias,
            
        ]);

        return "Projeto criado com sucesso!";


    }
}
