<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model {

	protected $table = 'orders';
	public $timestamps = true;
	protected $fillable = array('ref', 'partner_id', 'cart_id', 'current_state', 'total_nb_products', 'total_products_ht', 'total_taxes', 'valid');

	public function partner()
	{
		return $this->belongsTo('App\Partner');
	}

	public function details()
	{
		return $this->hasMany('App\OrderDetail');
	}

	public function state()
	{
		return $this->belongsTo('App\OrderState');
	}

	public function cart()
	{
		return $this->belongsTo('App\Cart');
	}

	public function vouchers()
	{
		return $this->hasMany('App\Voucher');
	}

	public function invoices()
	{
		return $this->belongsToMany('App\Invoice');
	}

}