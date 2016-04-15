<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stalls', function (Blueprint $table) {
            $table->increments('stall_id');
            $table->string('username');
            $table->string('mobile');
            $table->string('weixinNo');
            $table->string('title');
            $table->string('stallName');
            $table->string('stallNum');
            $table->string('city');
            $table->string('stall');
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('stallCity')->nullable();
            $table->string('region')->nullable();
            $table->string('address')->nullable();
            $table->string('style');
            $table->string('category');
            $table->tinyInteger('shipmentOK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stalls');
    }
}
