<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('news', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 100)->nullable();
			$table->text('content', 65535)->nullable();
			$table->text('extra_content')->nullable();
			$table->text('images')->nullable();
			$table->float('latitude', 10, 6)->nullable()->index('latitude');
			$table->float('longitude', 10, 6)->nullable()->index('longitude');
			$table->integer('category_id')->index('category_id');
			$table->integer('disaster_type')->index('disaster_type');
			$table->integer('province_id')->nullable()->index('province_id');
			$table->string('address');
			$table->text('rescue_vehicles')->nullable();
			$table->bigInteger('created_by_user_id')->unsigned()->nullable()->index('created_by_user_id_2');
			$table->bigInteger('created_by_admin_id')->unsigned()->nullable()->index('created_by_admin_id');
			$table->bigInteger('updated_by_admin_id')->unsigned()->nullable()->index('updated_by_admin_id');
			$table->boolean('is_public')->default(0)->index('is_public');
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
		Schema::drop('news');
	}

}
