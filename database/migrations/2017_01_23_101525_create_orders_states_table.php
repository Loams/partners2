<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersStatesTable extends Migration {

	public function up()
	{
		Schema::create('orders_states', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('display_name', 255)->nullable();
			$table->string('description', 255)->nullable();
			$table->boolean('invoice')->nullable();
			$table->boolean('order')->default(0);
			$table->boolean('send_email');
			$table->string('email_template', 255)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('orders_states');
	}
}