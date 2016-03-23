<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCelebrityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('celebrity', function ($table) {
            $table->integer('oauth_user_id')->unsigned()->nullable();
            $table->foreign('oauth_user_id')->references('id')->on('oauth_user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('celebrity', function ($table) {
            $table->dropForeign('celebrity_oauth_user_id_foreign');
            $table->dropColumn(['oauth_user_id']);
        });
    }
}
