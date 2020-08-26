<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interesse extends Model
{
    public function usuario()
    {
        return $this->belongsToMany('App\Usuario');
    }

    public function projeto()
    {
        return $this->belongsToMany('App\Projeto');
    }
}
