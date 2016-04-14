<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFansProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fans_profile', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->char('weipai_uid', 24)->default('');
			$table->integer('total_fans')->nullable()->default(0);
			$table->integer('female_fans')->nullable()->default(0);
			$table->integer('fans_with_age')->nullable()->default(0);
			$table->integer('fans_age_group1')->nullable()->default(0);
			$table->integer('fans_age_group2')->nullable()->default(0);
			$table->integer('fans_age_group3')->nullable()->default(0);
			$table->integer('fans_age_group4')->nullable()->default(0);
			$table->string('fans_city1')->nullable();
			$table->integer('fans_num_city1')->nullable()->default(0);
			$table->string('fans_city2')->nullable();
			$table->integer('fans_num_city2')->nullable()->default(0);
			$table->string('fans_city3')->nullable();
			$table->integer('fans_num_city3')->nullable()->default(0);
			$table->string('fans_city4')->nullable();
			$table->integer('fans_num_city4')->nullable()->default(0);
			$table->string('fans_city5')->nullable();
			$table->integer('fans_num_city5')->nullable()->default(0);
			$table->string('fans_city6')->nullable();
			$table->integer('fans_num_city6')->nullable()->default(0);
			$table->string('fans_city7')->nullable();
			$table->integer('fans_num_city7')->nullable()->default(0);
			$table->string('fans_city8')->nullable();
			$table->integer('fans_num_city8')->nullable()->default(0);
			$table->string('fans_city9')->nullable();
			$table->integer('fans_num_city9')->nullable()->default(0);
			$table->string('fans_city10')->nullable();
			$table->integer('fans_num_city10')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('fans_profile');
	}

}
