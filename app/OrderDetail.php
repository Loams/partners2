<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model {

	protected $table = 'orders_details';
	public $timestamps = false;
	protected $fillable = array('order_id', 'product_id', 'product_name', 'product_qty', 'product_price_ht', 'product_price_wt', 'total_price_ht', 'total_price_wt');

	public function order()
	{
		return $this->belongsTo('App\Order');
	}

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

}