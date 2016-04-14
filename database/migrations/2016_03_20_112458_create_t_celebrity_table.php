<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCelebrityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('celebrity', function(Blueprint $table)
		{
			$table->integer('id')->primary();
			$table->string('nickname')->default('');
			$table->string('realname')->default('');
			$table->boolean('sex')->nullable()->default(1);
			$table->integer('birthday')->nullable()->default(0);
			$table->string('city')->nullable();
			$table->string('education')->nullable();
			$table->integer('height')->nullable()->default(0);
			$table->integer('weight')->nullable()->default(0);
			$table->integer('bust')->nullable()->default(0);
			$table->integer('waist')->nullable()->default(0);
			$table->integer('hop')->nullable()->default(0);
			$table->boolean('annual_income')->nullable()->default(1);
			$table->string('occupation')->nullable();
			$table->string('experience', 4096)->nullable();
			$table->string('cellphone')->nullable();
			$table->string('address')->nullable();
			$table->string('wechat_id')->nullable();
			$table->string('weibo_nickname')->nullable();
			$table->integer('total_fans_num')->nullable()->default(0);
			$table->integer('weibo_fans_num')->nullable()->default(0);
			$table->integer('weipai_fans_num')->nullable()->default(0);
			$table->integer('meipai_fans_num')->nullable()->default(0);
			$table->integer('kuaishou_fans_num')->nullable()->default(0);
			$table->integer('miaopai_fans_num')->nullable()->default(0);
			$table->string('personality', 2083)->nullable();
			$table->string('tags')->nullable();
			$table->string('skills', 511)->nullable();
			$table->string('profile_img', 1023)->nullable();
			$table->integer('update_time')->nullable();
			$table->integer('sort_manually')->nullable();
			$table->string('weibo_link', 1023)->nullable();
			$table->string('meipai_nickname')->nullable();
			$table->string('meipai_link')->nullable();
			$table->string('kuaishou_nickname')->nullable();
			$table->string('miaopai_nickname')->nullable();
			$table->string('weipai_nickname')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('celebrity');
	}

}
