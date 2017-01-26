<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePartnersTable extends Migration {

	public function up()
	{
		Schema::create('partners', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 50);
			$table->string('name', 50);
			$table->string('address', 255);
			$table->string('cp', 5);
			$table->string('city', 255);
			$table->string('phone', 10);
			$table->string('order_prefix', 255);
			$table->string('ps_name', 255)->nullable()->default('null');
			$table->integer('parent_id')->unsigned()->nullable();
			$table->boolean('is_store')->default(0);
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('partners');
	}
}