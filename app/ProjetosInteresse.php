<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetosInteresse extends Model
{
    public function Interesse(){
        return $this->belongsTo('App\Interesse');
    }
}
