<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    public $table="disciplines";

    public function instructeurs(){
        return $this->belongsToMany('App\Instructeur');
    }
    
   public function groupes( ){
       return $this->hasMany('App\Groupe');
   }
}
