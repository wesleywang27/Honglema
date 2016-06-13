<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('merchant_id');
            $table->string('name');
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->string('address');
            $table->string('wechat');
            $table->string('cellphone');
            $table->string('alipay_name');
            $table->string('alipay_account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('merchants');
    }
}
