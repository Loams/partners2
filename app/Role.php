<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $table = 'roles';
	public $timestamps = true;
	protected $fillable = array('name', 'display_name', 'description');

	public function users()
	{
		return $this->belongsToMany('App\User');
	}

	public function permissions()
	{
		return $this->hasMany('App\Permission');
	}

}