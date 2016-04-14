<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';

    public $timestamps = false;

    protected $primaryKey = 'brand_id';

    protected $fillable = [
        'username',
        'mobile',
        'weixinNo',
        'title',
        'company',
        'brand',
        'sales',
        'category',
        'tMall',
        'tie',
        'factory',
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
        'price',
        'style',
        'customPosition',
        'customAge',
        'refund',
        'description',
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
        'address' => 'required'
    );
}
