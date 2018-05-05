<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    public $table="groupes";

    public function adherents(){
        return $this->belongsToMany('App\Adherent');
    }
    public function instructeurs(){
        return $this->belongsToMany('App\Instructeur');
    }
}
