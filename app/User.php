<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['name','email','password','friends',];

    public function posts(){
        return $this->hasMany('App\Post');
    }
    
    public function comments(){
        return $this->hasMany('App\Comment');
    }


}
