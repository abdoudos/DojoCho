<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //members
    public function user(){
        return $this->belongsTo('App\Users');
    }
    public function instructeur(){
        return $this->hasOne('App\Instructeur');
    }
}
