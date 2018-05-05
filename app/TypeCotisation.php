<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeCotisation extends Model
{
    //
    public $table="typeCotisations";

    public function adherents(){
        return $this->belongsToMany('App\Adherent');
    }
}
