<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVouchersTable extends Migration {

	public function up()
	{
		Schema::create('vouchers', function(Blueprint $table) {
			$table->increments('id');
			$table->string('code', 255)->index();
			$table->integer('order_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('vouchers');
	}
}