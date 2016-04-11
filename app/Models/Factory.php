<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
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
        'tMall',
        'tie',
        'ext1',
        'ext2',
        'ext3',
        'ext4',
        'ext5',
        'ext6',
        'factorySize',
        'factoryOut',
        'design',
        'zhangqi',
        'country',
        'province',
        'city',
        'region',
        'address',
        'product',
        'productCount',
        'orderCount',
        'refund',
        'description',
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
        'address' => 'required',
        'description' => 'required'
    );
    
}
