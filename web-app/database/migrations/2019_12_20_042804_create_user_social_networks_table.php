<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserSocialNetworksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_social_networks', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->bigInteger('user_id')->unsigned()->index();
			$table->enum('network_type', array('google','facebook','twitter'))->index();
			$table->string('network_user_id', 100)->index();
			$table->string('access_token')->index();
			$table->timestamps();
			$table->softDeletes();
			$table->unique(['user_id','network_type','network_user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_social_networks');
	}

}
