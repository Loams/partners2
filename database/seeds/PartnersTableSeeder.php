<?php

use Illuminate\Database\Seeder;
use App\Partner;
class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create(array(
            'type' => 'group',
            'name' => '21e',
            'address' => '157, boulevard MacDonald',
            'cp' => '75019',
            'city' =>'Paris',
            'phone' => '0102030405',
            'order_prefix' => '21E',
            'ps_name' => null,
            'is_store' => '0'
            ));
    }
}
