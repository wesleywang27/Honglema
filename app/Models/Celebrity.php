<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TCelebrity
 */
class Celebrity extends Model
{
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
    ];

    protected $guarded = [];

    protected $hidden = [
        'cellphone',
        'address',
    ];

    public function pictures()
    {
        $hasMany = $this->hasMany('App\Models\Picture', 'uid');
        return $hasMany;
    }
        
}