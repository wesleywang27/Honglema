<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factory extends Model{
    use SoftDeletes;

    protected $table = 'factories';

    public $timestamps = false;

    protected $primaryKey = 'factory_id';

    protected $fillable = [
        'username',
        'mobile',
        'weixinNo',
        'title',
        'company',
        'category',
        'advantageSubcategory',
        'shipmentOK',
        'ext1',
        'ext2',
        'ext5',
        'design',
        'zhangqi',
        'country',
        'province',
        'city',
        'region',
        'address',
        'productCount',
        'orderCount',
        'refund',
        'description',
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
        'address' => 'required'
    );

    public function pictures()
    {
        return $this->hasMany('App\Models\ProductPicture', 'id')->where('type', '=', 0);
    }
}
