<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    public $table="seances";

    public function adherents(){
        return $this->belongsToMany('App\Adherent');
    }
    public function groupe(){
        return $this->belongsTo('App\Groupe');
    }
}
