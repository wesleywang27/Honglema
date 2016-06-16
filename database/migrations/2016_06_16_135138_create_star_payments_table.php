<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('star_payments', function (Blueprint $table) {
            $table->increments('sp_id');
            $table->integer('administrator_id');
            $table->integer('star_id');
            $table->timestamp('pay_at');
            $table->integer('money');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
