<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskResult extends Model
{
    //
    protected $table = 'task_result';


    protected  $primaryKey = 'task_result_id';

    protected  $fillable = [
        'task_id',
        'playback_url',
        'views',
        'duration'
    ];
}
