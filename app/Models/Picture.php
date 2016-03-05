<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPicture
 */
class Picture extends Model
{
    protected $table = 't_picture';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'file_id',
        'url',
        'upload_time'
    ];

    protected $guarded = [];

        
}