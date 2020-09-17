<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    // public function perfil()
    // {
    //     return $this->hasOne('App\Perfil');
    // }

    protected $fillable = ['Nome_Completo', 'Telefone', 'Email', 'Senha'];

    
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

