<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model {

	protected $table = 'permissions';
	public $timestamps = true;
	protected $fillable = array('name', 'display_name', 'description');

	public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

}