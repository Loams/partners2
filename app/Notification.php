<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model {

	protected $table = 'notifications';
	public $timestamps = true;
	protected $fillable = array('type', 'notifiable_id', 'notifiable_type', 'read_at');

	public function user()
	{
		return $this->belongsTo('App\User');
	}

}