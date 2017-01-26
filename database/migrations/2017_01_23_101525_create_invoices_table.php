<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration {

	public function up()
	{
		Schema::create('invoices', function(Blueprint $table) {
			$table->increments('id');
			$table->string('ref', 255);
			$table->integer('current_state')->unsigned();
			$table->integer('total_nb_order');
			$table->decimal('total_orders_ht', 10,2);
			$table->decimal('total_orders_ttc', 10,2);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('invoices');
	}
}