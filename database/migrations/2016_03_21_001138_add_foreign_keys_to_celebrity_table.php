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

            $table->string('avatar',2083)->nullable();
            $table->string('id_name',100)->nullable();
            $table->string('id_code',50)->nullable();
            $table->string('id_image',2083)->nullable();
            $table->string('weibo_id',50)->nullable();
            $table->string('weipai_id',50)->nullable();
            $table->string('miaopai_id',50)->nullable();
            $table->string('meipai_id',50)->nullable();
            $table->string('kuaishou_id',50)->nullable();
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

            $table->dropColumn('avatar');
            $table->dropColumn('id_name');
            $table->dropColumn('id_code');
            $table->dropColumn('id_image');
            $table->dropColumn('weibo_id');
            $table->dropColumn('weipai_id');
            $table->dropColumn('miaopai_id');
            $table->dropColumn('meipai_id');
            $table->dropColumn('kuaishou_id');
            //$table->dropColumn('age');
        });
    }
}
