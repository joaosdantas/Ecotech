<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    public function perfil()
    {
        return $this->hasOne('App\Perfil');
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
