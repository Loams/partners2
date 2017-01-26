<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';
	public $timestamps = true;
	protected $fillable = array('reference', 'name', 'description', 'price_ht', 'active');

	public function details()
	{
		return $this->hasMany('App\OrderDetail');
	}

}