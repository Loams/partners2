<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {

	protected $table = 'payments';
	public $timestamps = true;
	protected $fillable = array('token', 'currency', 'amount', 'description', 'invoice_id');

	public function invoice()
	{
		return $this->belongsTo('App\Invoice');
	}

}