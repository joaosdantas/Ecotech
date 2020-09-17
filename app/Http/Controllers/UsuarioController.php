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
        dd($request->all());

        Usuario::create([
            'Nome_Completo'=>$request->nome,
            'Telefone'=>$request->telefone,
            'Email'=>$request->email,
            // 'Perfil'=>$request->perfil,
        ]);

        return "Produto Criado com Sucesso!";


    }

//     public function index()
// {
//     $usuarios = Usuario::all();
//     return view('usuarios.grid', compact('usuarios'));
// }

}