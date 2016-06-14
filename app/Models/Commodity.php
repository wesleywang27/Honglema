<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 12:15
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model{
    protected $table = 'commodities';

    public $timestamps = false;

    protected  $primaryKey = ['merchant_id', 'create_at'];

    protected  $fillable = [
        'name',
        'introduction',
        'url'
    ];

    public static $rules = array(
        //
    );

    public function commodityPictures()
    {
        return $this->hasMany('App\Models\CommodityPicture', 'uid');
    }
}