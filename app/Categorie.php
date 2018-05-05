<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
   public function groupes( ){
       return $this->hasMany('App\Groupe');
   }
}
