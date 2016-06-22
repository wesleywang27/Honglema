<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 12:17
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model{
    protected $table = 'activities';

    public $timestamps = false;

    public $primaryKey = 'activity_id';

    protected  $fillable = [
        'title',
        'claim',
        'time_within',
        'event',
        'level',
        'total_price',
    ];

    public static $rules = array(
        //
    );
}