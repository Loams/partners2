<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('gender', 3);
			$table->string('firstname', 50);
			$table->string('lastname', 50);
			$table->string('function', 50);
			$table->string('email')->unique();
			$table->string('phone', 10);
			$table->integer('partners_id')->unsigned();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}