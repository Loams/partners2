<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderState extends Model {

	protected $table = 'orders_states';
	public $timestamps = true;
	protected $fillable = array('name', 'display_name', 'description', 'invoice', 'order', 'send_email', 'email_template');

	public function orders()
	{
		return $this->hasMany('App\Order');
	}

	public function invoices()
	{
		return $this->hasMany('App\Invoice');
	}

}