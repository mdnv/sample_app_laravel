<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('first_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
			$table->enum('gender', array('male','female'))->nullable();
			$table->date('birthday')->nullable();
			$table->string('email')->unique();
			$table->dateTime('email_verified_at')->nullable();
			$table->dateTime('phone_verified_at')->nullable();
			$table->dateTime('officials_verified_at')->nullable();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->string('avatar', 200)->nullable();
			$table->string('phone', 30)->nullable()->unique('phone');
			$table->enum('user_type', array('people','officials'))->default('people');
			$table->string('address')->nullable();
			$table->string('position')->nullable();
			$table->boolean('receiving_sms_notification')->default(0);
			$table->boolean('receiving_email_notification')->default(0);
			$table->boolean('receiving_app_notification')->default(1);
			$table->integer('created_by')->nullable();
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
		Schema::drop('users');
	}

}
