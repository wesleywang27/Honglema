<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/17
 * Time: 11:51
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceLevel extends Model{
    protected $table = 'price_levels';

    public $timestamps = false;

    public $primaryKey = 'pl_id';

    protected  $fillable = [
        'level',
        'price'
    ];
}