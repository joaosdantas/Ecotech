<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    
    // public function perfil()
    // {
    //     return $this->hasOne('App\Perfil');
    // }

    
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

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nome_Completo', 'Email', 'Senha',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Senha', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
