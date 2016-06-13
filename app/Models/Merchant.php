<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 12:09
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model{
    protected $table = 'merchants';

    public $timestamps = false;

    protected  $primaryKey = 'merchant_id';

    protected  $fillable = [
        'name',
        'country',
        'province',
        'city',
        'region',
        'address',
        'wechat',
        'cellphone',
        'alipay_name',
        'alipay_account'
    ];

    public static $rules = array(
        //
    );

    public function avatars()
    {
        return $this->has('App\Models\Avatar', 'id')->where('type', '=', 1);
    }

    public function licenses()
    {
        return $this->has('App\Models\License', 'id');
    }
}