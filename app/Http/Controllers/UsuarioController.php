<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view('cadastro.cadastro-pessoa-1', compact('usuarios'));
    }

    public function store(Request $request)    
    {
        // dd($request->all());

        Usuario::create([
            'nome'=>$request->nome,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'senha'=>$request->senha,
            'perfil'=>$request->perfil,
        ]);

        $this->validate($request, $this->Perfil->rules);
        
        return view('cadastro.cadastroProjeto', );

       

    }

    public function show($id)
    {
        $usuarios = Usuario::findOrFail($id);
        return view('', ['usuarios'=>$usuarios]);

    }

//     public function index()
// {
//     $usuarios = Usuario::all();
//     return view('usuarios.grid', compact('usuarios'));
// }

}