<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUserDeviceTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_device_tokens', function(Blueprint $table)
		{
			$table->foreign('user_id', 'user_device_tokens_ibfk_1')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_device_tokens', function(Blueprint $table)
		{
			$table->dropForeign('user_device_tokens_ibfk_1');
		});
	}

}
