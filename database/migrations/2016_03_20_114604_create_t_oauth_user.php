<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTOauthUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oauth_user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('openid',100);
            $table->string('oauth_type',10);
            $table->string('unionid',100);
            $table->string('nickname')->nullable();
            $table->string('avatar',2083)->nullable();
            $table->char('sex', 1)->nullable();
            $table->string('language',10)->nullable();
            $table->string('country')->nullable();
            $table->string('province')->nullable();
            $table->string('city')->nullable();
            $table->timestamps();
            
            $table->unique(['openid', 'oauth_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oauth_user');
    }
}
