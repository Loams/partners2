<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model {

	protected $table = 'vouchers';
	public $timestamps = true;
	protected $fillable = array('code', 'order_id');

	public function order()
	{
		return $this->belongsTo('App\Order');
	}

}