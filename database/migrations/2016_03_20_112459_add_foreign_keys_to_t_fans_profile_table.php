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
			$table->foreign('id', 'fans_profile_ibfk_1')->references('id')->on('celebrity')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
			$table->dropForeign('fans_profile_ibfk_1');
		});
	}

}
