<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;
    
	protected $table = 'users';
    
	public $timestamps = true;
    
	protected $fillable = array('gender', 'firstname', 'lastname', 'function', 'email', 'phone', 'partners_id', 'password');
	protected $hidden = array('password', 'remember_token');

	public function partner()
	{
		return $this->hasOne('App\Partner', 'partner_id');
	}

	

	public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

}