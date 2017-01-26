<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->foreign('partners_id')->references('id')->on('partners')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('partners', function(Blueprint $table) {
			$table->foreign('parent_id')->references('id')->on('partners')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('partner_id')->references('id')->on('partners')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->foreign('current_state')->references('id')->on('orders_states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('orders_details', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('orders_details', function(Blueprint $table) {
			$table->foreign('product_id')->references('id')->on('products')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('vouchers', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('current_state')->references('id')->on('orders_states')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('order_invoice', function(Blueprint $table) {
			$table->foreign('order_id')->references('id')->on('orders')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('order_invoice', function(Blueprint $table) {
			$table->foreign('invoice_id')->references('id')->on('invoices')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->foreign('invoice_id')->references('id')->on('invoices')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropForeign('users_partners_id_foreign');
		});
		Schema::table('partners', function(Blueprint $table) {
			$table->dropForeign('partners_parent_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_partner_id_foreign');
		});
		Schema::table('orders', function(Blueprint $table) {
			$table->dropForeign('orders_current_state_foreign');
		});
		Schema::table('orders_details', function(Blueprint $table) {
			$table->dropForeign('orders_details_order_id_foreign');
		});
		Schema::table('orders_details', function(Blueprint $table) {
			$table->dropForeign('orders_details_product_id_foreign');
		});
		Schema::table('vouchers', function(Blueprint $table) {
			$table->dropForeign('vouchers_order_id_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_current_state_foreign');
		});
		Schema::table('order_invoice', function(Blueprint $table) {
			$table->dropForeign('order_invoice_order_id_foreign');
		});
		Schema::table('order_invoice', function(Blueprint $table) {
			$table->dropForeign('order_invoice_invoice_id_foreign');
		});
		Schema::table('payments', function(Blueprint $table) {
			$table->dropForeign('payments_invoice_id_foreign');
		});
	}
}