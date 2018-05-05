<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function perssone(){
        return $this->belongsTo('App\Perssone');
    }
    
    public function admin(){
        return $this->hasOne('App\Admin');
    }
    public function member(){
        return $this->hasOne('App\Member');
    }
}
