<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructeur extends Model
{
    public $table="instructeurs";

    public function groupes(){
        return $this->belongsToMany('App\Groupe');
    }

    public function disciplines(){
        return $this->belongsToMany('App\Discipline');
    }
    public function user(){
        return $this->belongsTo('App\Users');
    }
}
