<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model{

    protected $fillable = ['name', 'favourite_sport', 'profile_picture',];

    public function user(){
            return $this->belongsTo('App\User');
        }

}
