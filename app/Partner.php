<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model {

	protected $table = 'partners';
	public $timestamps = true;
	protected $fillable = array('type', 'name', 'address', 'cp', 'city', 'phone', 'order_prefix', 'ps_name', 'parent_id', 'is_store');

	public function user()
	{
		return $this->belongsTo('User', 'id');
	}

	public function group()
	{
		return $this->belongsToMany('App\Partner', 'parent_id');
	}

	public function orders()
	{
		return $this->hasMany('App\Order');
	}

}