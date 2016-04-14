<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $table = 'designers';

    public $timestamps = false;

    protected  $primaryKey = 'designer_id';

    protected  $fillable = [
        'designType',
        'username',
        'mobile',
        'weixinNo',
        'title',
        'company',
        'country',
        'province',
        'city',
        'region',
        'address',
        'designExperience',
        'designTeam',
        'brand',
        'designBrand',
        'description',
    ];

    public static $rules = array(
        'username' => 'min:2',
        'mobile' => 'between:11,11',
        'designBrand' => 'required'
    );
    //
}
