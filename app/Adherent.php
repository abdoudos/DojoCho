<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adherent extends Model
{
    //
    public function perssone(){
        return $this->belongsTo('App\Perssone');
    }
}
