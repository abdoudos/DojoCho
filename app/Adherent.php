<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    //
    public $table="adherents";

    public function typecotisations(){
        return $this->belongsToMany('App\TypeCotisation');
    }

    public function groupes(){
        return $this->belongsToMany('App\Groupe');
    }

    public function perssone(){
        return $this->belongsTo('App\Perssone');
    }
    public function seances(){
        return $this->belongsToMany('App\Seance');
    }
}
