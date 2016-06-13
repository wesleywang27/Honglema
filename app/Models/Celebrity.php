<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class TCelebrity
 */
class Celebrity extends Model{
    use SoftDeletes;
    
    protected $table = 'celebrity';

    public $timestamps = false;

    protected $fillable = [
        'nickname',
        'realname',
        'sex',
        'birthday',
        'city',
        'education',
        'height',
        'weight',
        'bust',
        'waist',
        'hop',
        'annual_income',
        'occupation',
        'experience',
        'cellphone',
        'address',
        'wechat_id',
        'weibo_nickname',
        'total_fans_num',
        'weibo_fans_num',
        'weipai_fans_num',
        'meipai_fans_num',
        'kuaishou_fans_num',
        'miaopai_fans_num',
        'personality',
        'tags',
        'skills',
        'profile_img',
        'update_time',
        'sort_manually',
        'weibo_link',
        'meipai_link',
        'avatar',
        'id_name',
        'id_code',
        'id_image',
        'weibo_id',
        'weipai_id',
        'miaopai_id',
        'meipai_id',
        'kuaishou_id',

    ];

    protected $guarded = [
        'oauth_user_id'
    ];

    protected $hidden = [
        'cellphone',
        'address',
    ];

    public function pictures()
    {
        return $this->hasMany('App\Models\Picture', 'uid');
    }

    public function fans_profile()
    {
        return $this->hasOne('App\Models\FansProfile', 'id');
    }
        
}