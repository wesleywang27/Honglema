<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model{
    protected $table = 'logs';

    public $timestamps = false;

    protected $primaryKey = 'log_id';

    protected $fillable = [
        'username',
        'operation',
        'operate_table',
        'sql_statement',
        'time'
    ];
}