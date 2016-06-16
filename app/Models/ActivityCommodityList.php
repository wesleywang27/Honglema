<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/16
 * Time: 14:29
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityCommodityList extends Model{
    protected $table = 'activity_commodity_lists';

    public $timestamps = false;

    protected  $fillable = [
        'activity_id',
        'commodity_id'
    ];
}