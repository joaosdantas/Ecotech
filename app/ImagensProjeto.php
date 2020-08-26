<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagensProjeto extends Model
{
    //
    public function Projeto(){
        return $this->belongsTo('App\Projeto');
    }
}
