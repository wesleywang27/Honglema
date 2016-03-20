<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTPictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('picture', function(Blueprint $table)
		{
			$table->integer('uid');
			$table->string('file_id')->default('');
			$table->string('url', 2083)->nullable()->default('');
			$table->integer('upload_time');
			$table->primary(['uid','file_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('picture');
	}

}
