<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model{
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
        'shipmentOK'
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
    );
    //
}