<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/13
 * Time: 12:47
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model{
    protected $table = 'avatars';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'type',
        'file_name',
        'url'
    ];

    protected $guarded = [];
}