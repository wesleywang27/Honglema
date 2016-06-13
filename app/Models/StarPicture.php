<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/13
 * Time: 15:20
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarPicture extends Model{
    protected $table = 'star_pictures';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'file_id',
        'url'
    ];

    protected $guarded = [];
}