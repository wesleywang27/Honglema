<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->integer('activity_id',10);
            $table->integer('merchant_id',10);
            $table->integer('commodity_id',10);
            $table->string('title');
            $table->string('claim');
            $table->string('time_within');
            $table->integer('event',10);
            $table->integer('level',10);
            $table->integer('total_price',10);
            $table->tinyInteger('activity_status',2);
            $table->tinyInteger('payment_status',2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('activities');
    }
}
