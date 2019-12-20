<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin_users', function(Blueprint $table)
		{
			$table->foreign('created_by', 'admin_users_ibfk_1')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin_users', function(Blueprint $table)
		{
			$table->dropForeign('admin_users_ibfk_1');
		});
	}

}
