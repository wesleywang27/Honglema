<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/16
 * Time: 11:55
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskPicture extends Model{
    protected $table = 'task_pictures';

    public $timestamps = false;

    protected $fillable = [
        'task_result_id',
        'file_id',
        'url'
    ];

    protected $guarded = [];
}