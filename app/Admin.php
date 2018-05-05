<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //public $table="admins";
    public function user(){
        return $this->belongsTo('App\Users');
    }
}