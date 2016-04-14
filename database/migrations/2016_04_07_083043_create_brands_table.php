<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('brand_id');
            $table->string('username');
            $table->string('mobile');
            $table->string('weixinNo');
            $table->string('title');
            $table->string('company');
            $table->string('brand');
            $table->string('sales');
            $table->string('category');
            $table->boolean('tMall');
            $table->boolean('tie');
            $table->boolean('factory');
            $table->string('factorySize');
            $table->integer('factoryOut');
            $table->boolean('design');
            $table->string('zhangqi')->nullable();
            $table->string('country');
            $table->string('province');
            $table->string('city');
            $table->string('region');
            $table->string('address');
            $table->string('product');
            $table->string('price');
            $table->string('style');
            $table->string('customPosition');
            $table->string('customAge');
            $table->boolean('refund');
            $table->string('description')->nullable();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brands');
    }
}
