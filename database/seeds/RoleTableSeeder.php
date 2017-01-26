<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder {

	public function run()
	{
		//DB::table('roles')->delete();

		// super-admin
		Role::create(array(
				'name' => 'super-admin',
				'display_name' => 'Super admin',
				'description' => 'super admin'
			));

		// group
		Role::create(array(
				'name' => 'group-admin',
				'display_name' => 'Group admin',
				'description' => 'group - admin'
			));

		// store - admin
		Role::create(array(
				'name' => 'store-admin',
				'display_name' => 'Store admin',
				'description' => 'Store admin'
			));

		// store user
		Role::create(array(
				'name' => 'store-user',
				'display_name' => 'Store user',
				'description' => 'store user'
			));
	}
}