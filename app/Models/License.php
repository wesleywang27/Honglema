<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/13
 * Time: 12:51
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class License extends Model{
    protected $table = 'licenses';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'file_name',
        'url'
    ];

    protected $guarded = [];
}