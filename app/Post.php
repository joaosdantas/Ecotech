<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function imagensPosts(){
        
        return $this->hasMany('App\ImagensPost');

    }

    public function Usuario(){
        return $this->belongsTo('App\Usuario');
    }
}
