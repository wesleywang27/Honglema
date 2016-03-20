<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OAuthUser
 */
class OAuthUser extends Model
{
    protected $table = 'oauth_user';

    public $timestamps = true;

    protected $fillable = [
        'nickname',
        'avatar',
        'sex',
        'language',
        'country',
        'province',
        'city'
    ];

    protected $guarded = [
        'openid',
        'oauth_type',
        'unionid'
    ];

        
}