<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('reference', 255);
			$table->string('name', 255);
			$table->string('description', 255)->nullable();
			$table->decimal('price_ht', 10,2);
			$table->boolean('active')->default(false);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}