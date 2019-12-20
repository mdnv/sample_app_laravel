<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNewsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('news', function(Blueprint $table)
		{
			$table->foreign('created_by_admin_id', 'news_ibfk_1')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('created_by_user_id', 'news_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('updated_by_admin_id', 'news_ibfk_3')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('province_id', 'news_ibfk_4')->references('id')->on('provinces')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('news', function(Blueprint $table)
		{
			$table->dropForeign('news_ibfk_1');
			$table->dropForeign('news_ibfk_2');
			$table->dropForeign('news_ibfk_3');
			$table->dropForeign('news_ibfk_4');
		});
	}

}
