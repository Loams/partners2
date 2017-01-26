<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('gender', 'firstname', 'lastname', 'function', 'email', 'phone', 'partners_id', 'password');
	protected $hidden = array('password', 'remember_token');

	public function partner()
	{
		return $this->hasOne('App\Partner', 'partner_id');
	}

	public function notifications()
	{
		return $this->hasMany('App\Notification');
	}

	public function roles()
	{
		return $this->hasMany('App\Role');
	}

}