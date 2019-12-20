<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name');
			$table->string('first_name', 100)->nullable();
			$table->string('last_name', 100)->nullable();
			$table->enum('gender', array('male','female'))->nullable();
			$table->date('birthday')->nullable();
			$table->string('email')->unique('users_email_unique');
			$table->dateTime('email_verified_at')->nullable();
			$table->dateTime('phone_verified_at')->nullable();
			$table->string('password');
			$table->string('remember_token', 100)->nullable();
			$table->string('avatar', 200)->nullable();
			$table->string('phone', 30)->index('phone');
			$table->enum('role', array('admin','supervisor','editor'))->nullable();
			$table->string('address')->nullable();
			$table->string('position');
			$table->boolean('receiving_sms_notification')->default(0);
			$table->boolean('receiving_email_notification')->default(0);
			$table->bigInteger('created_by')->unsigned()->index('created_by');
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
		Schema::drop('admin_users');
	}

}
