<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTFansProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fans_profile', function(Blueprint $table)
		{
			$table->foreign('id', 't_fans_profile_ibfk_1')->references('id')->on('t_celebrity')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fans_profile', function(Blueprint $table)
		{
			$table->dropForeign('t_fans_profile_ibfk_1');
		});
	}

}
