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
    public function members(){
        return $this->belongsToMany('App\Member');
    }
    public function discipline(){
        return $this->belongsTo('App\Discipline');
    }
    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }
    public function seances(){
        return $this->hasMany('App\Seance');
    }
}
