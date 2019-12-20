<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfigurationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configurations', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('code', 100);
			$table->string('name', 100);
			$table->text('value')->nullable();
			$table->bigInteger('updated_by')->unsigned()->nullable()->index('updated_by');
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
		Schema::drop('configurations');
	}

}
