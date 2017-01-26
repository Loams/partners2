<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration {

	public function up()
	{
		Schema::create('orders', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ref', 255);
			$table->integer('partner_id')->unsigned();
			$table->integer('cart_id')->unsigned();
			$table->integer('current_state')->unsigned();
			$table->integer('total_nb_products')->unsigned();
			$table->decimal('total_products_ht', 10,2);
			$table->decimal('total_taxes', 10,2);
			$table->boolean('valid');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orders');
	}
}