<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/14
 * Time: 15:41
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommodityPicture extends Model{
    protected $table = 'commodity_pictures';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'file_id',
        'url'
    ];

    protected $guarded = [];
}