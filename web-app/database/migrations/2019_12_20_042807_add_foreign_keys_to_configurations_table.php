<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToConfigurationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('configurations', function(Blueprint $table)
		{
			$table->foreign('updated_by', 'configurations_ibfk_1')->references('id')->on('admin_users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('configurations', function(Blueprint $table)
		{
			$table->dropForeign('configurations_ibfk_1');
		});
	}

}
