<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {


	public function roles()
	{
		return $this->belongsToMany('App\Role');
	}

}