<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    
    protected $fillable = ['nome', 'telefone', 'email', 'senha', 'perfil'];

    public $rules = [
        'nome'=> 'required | min:3 | max:100',
        'telefone'=> 'required |numeric',
        'email'=> 'required |email',
        'senha'=> 'required | min:10 | max:100',
        ];
    
    public function perfil()
    {
        return $this->hasOne('App\Perfil');
    }
    
    public function Usuario(){
        
        return $this->hasMany('App\Usuario');

    }
    
    public function Posts(){
        
        return $this->hasMany('App\Post');

    }

    public function interesse()
    {
        return $this->belongsToMany('App\Interesse');
    }

    public function projeto()
    {
        return $this->belongsToMany('App\Projeto');
    }
}

