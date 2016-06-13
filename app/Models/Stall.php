<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Stall extends Model{
    use SoftDeletes;

    protected $table = 'stalls';

    public $timestamps = false;

    protected  $primaryKey = 'stall_id';

    protected  $fillable = [
        'username',
        'mobile',
        'weixinNo',
        'title',
        'stallName',
        'stallNum',
        'city',
        'stall',
        'country',
        'province',
        'stallCity',
        'region',
        'address',
        'style',
        'category',
        'shipmentOK',
        'open_id'
    ];

    protected $dates = ['deleted_at'];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
    );

    public function pictures()
    {
        return $this->hasMany('App\Models\ProductPicture', 'id')->where('type', '=', 3);
    }
}