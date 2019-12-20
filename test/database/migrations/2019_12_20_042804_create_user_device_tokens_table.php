<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserDeviceTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_device_tokens', function(Blueprint $table)
		{
			$table->increments('id');
			$table->bigInteger('user_id')->unsigned()->nullable()->index('user_id');
			$table->string('device_token')->nullable();
			$table->string('platform', 50)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_device_tokens');
	}

}
