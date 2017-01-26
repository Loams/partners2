<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

	protected $table = 'invoices';
	public $timestamps = true;
	protected $fillable = array('ref', 'current_state', 'total_nb_order', 'total_orders_ht', 'total_orders_ttc');

	public function orders()
	{
		return $this->hasMany('App\Order');
	}

	public function state()
	{
		return $this->belongsTo('App\OrderState');
	}

	public function payments()
	{
		return $this->hasMany('App\Payment');
	}

}