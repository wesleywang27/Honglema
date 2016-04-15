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
        'advantageSubcategory',
        'shipmentOK',
        'tie',
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
    
}
