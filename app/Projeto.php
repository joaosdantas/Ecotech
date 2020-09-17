<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    //Adicionando os campos fillable
    protected $fillable = [
        'titulo', 'descricao', 'captacao',
    ];

    //Adicionando relacionamento 1:n ImagemProjeto
    public function imagensProjetos(){
        
        return $this->hasMany('App\ImagensProjeto');

    }

    public function usuario()
    {
        return $this->belongsToMany('App\Usuario');
    }

    public function interesse()
    {
        return $this->belongsToMany('App\Interesse');
    }
}
