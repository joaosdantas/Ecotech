<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssociadosProjeto extends Model
{
    public function Projeto(){
        return $this->belongsTo('App\Projeto');
    }

    public function Usuario(){
        
        return $this->belongsTo('App\Usuario');

    }

    public function Perfil(){
        
        return $this->hasMany('App\Perfil');

    }

}
