<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 12:11
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Star extends Model{
    protected $table = 'stars';

    public $timestamps = false;

    protected  $primaryKey = 'star_id';

    protected  $fillable = [
        'avatar',
        'name',
        'sex',
        'location',
        'cup',
        'weight',
        'height',
        'age',
        'occupation',
        'education',
        'experience',
        'real_name',
        'ID_number',
        'cellphone',
        'weibo_id',
        'weipai_id',
        'miaopai_id',
        'meipai_id',
        'kuaishou_id',
        'shirt_size',
        'pants_size',
        'shoes_size',
        'province',
        'city',
        'region',
        'address',
        'wechat',
        'alipay_name',
        'alipay_account',
        'ID_card1',
        'ID_card2'
    ];

    public static $rules = array(
        //
    );

    public function starPictures()
    {
        return $this->hasMany('App\Models\StarPictures', 'id');
    }
}