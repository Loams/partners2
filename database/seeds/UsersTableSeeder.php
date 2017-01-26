<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create(array(
            'gender' => 'M',
            'firstname' => 'super',
            'lastname' => 'admin',
            'function' => 'admin',
            'email' => 'admin@21e.fr',
            'phone' => '0102030405',
            'password' => bcrypt('21admin21'),
            'partners_id' => '1'
            ));
    }
}
