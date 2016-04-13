<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTPictureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('t_picture', function(Blueprint $table)
		{
			$table->foreign('uid', 't_picture_ibfk_1')->references('id')->on('t_celebrity')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('t_picture', function(Blueprint $table)
		{
			$table->dropForeign('t_picture_ibfk_1');
		});
	}

}
