<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factories', function (Blueprint $table) {
            $table->increments('factory_id');
            $table->string('username');
            $table->string('mobile');
            $table->string('weixinNo');
            $table->string('title');
            $table->string('company');
            $table->string('category');
            $table->boolean('tMall');
            $table->boolean('tie');
            $table->string('ext1');
            $table->string('ext2');
            $table->string('ext3');
            $table->string('ext4');
            $table->string('ext5');
            $table->string('ext6');
            $table->string('factorySize');
            $table->integer('factoryOut');
            $table->boolean('design');
            $table->string('zhangqi')->nullable();
            $table->string('location');
            $table->string('address');
            $table->string('product');
            $table->integer('productCount');
            $table->integer('orderCount');
            $table->boolean('refund');
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('factories');
    }
}
