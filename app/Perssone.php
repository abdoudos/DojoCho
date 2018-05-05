<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perssone extends Model
{
    //
    public function users(){
        return $this->hasOne('App\User');
    }
    public function adherent(){
        return $this->hasOne('App\Adherent');
    }
}
