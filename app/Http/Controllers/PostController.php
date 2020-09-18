<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\ImagensPost;

class PostController extends Controller
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
            'texto'=>$request->texto,
            'usuario'=>$request->usuario_id,
            'perfil'=>$request->perfil_id,
                                   
        ]);

        return view('feed', );


    }

    public function show($id)
    {
        $projetos = Projeto::findOrFail($id);
        return view('feed', ['projetos'=>$projetos]);

    }
}
