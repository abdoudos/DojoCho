<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeanceEvenement extends Model
{
    public function member(){
        return $this->belongsToMany('App\Member');
    }
}
