<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars', function (Blueprint $table) {
            $table->increments('star_id');
            $table->string('name');
            $table->tinyInteger('sex');
            $table->string('location');
            $table->string('cup');
            $table->string('weight');
            $table->string('height');
            $table->string('age');
            $table->string('occupation');
            $table->string('education');
            $table->string('experience');
            $table->string('real_name');
            $table->string('ID_number');
            $table->string('cellphone');
            $table->string('weibo_id');
            $table->string('weipai_id');
            $table->string('miaopai_id');
            $table->string('meipai_id');
            $table->string('kuaishou_id');
            $table->string('shirt_size');
            $table->string('pants_size');
            $table->string('shoes_size');
            $table->string('province');
            $table->string('city');
            $table->string('region');
            $table->string('address');
            $table->string('wechat');
            $table->string('alipay_name');
            $table->string('alipay_account');
            $table->string('openid');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stars');
    }
}
