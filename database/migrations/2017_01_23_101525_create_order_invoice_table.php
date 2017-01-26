<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderInvoiceTable extends Migration {

	public function up()
	{
		Schema::create('order_invoice', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('invoice_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('order_invoice');
	}
}