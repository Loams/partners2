<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersDetailsTable extends Migration {

	public function up()
	{
		Schema::create('orders_details', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('order_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->string('product_name', 255);
			$table->integer('product_qty')->unsigned();
			$table->decimal('product_price_ht', 10,2)->nullable();
			$table->decimal('product_price_wt', 10,2);
			$table->decimal('total_price_ht', 10,2);
			$table->decimal('total_price_wt', 10,2);
		});
	}

	public function down()
	{
		Schema::drop('orders_details');
	}
}