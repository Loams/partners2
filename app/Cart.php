<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model {

	protected $table = 'shopping_cart';
	public $timestamps = true;
	protected $fillable = array('identifier', 'instance', 'content');

	public function order()
	{
		return $this->hasOne('App\Order');
	}

}