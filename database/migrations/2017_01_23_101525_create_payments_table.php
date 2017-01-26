<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	public function up()
	{
		Schema::create('payments', function(Blueprint $table) {
			$table->increments('id');
			$table->string('token', 255);
			$table->string('currency', 3);
			$table->bigInteger('amount')->unsigned();
			$table->string('description', 255);
			$table->integer('invoice_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('payments');
	}
}