<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Designer extends Model{
    use SoftDeletes;
    
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
        'mobile' => 'between:11,11'
    );

    public function pictures()
    {
        return $this->hasMany('App\Models\ProductPicture', 'id')->where('type', '=', 2);
    }
}
