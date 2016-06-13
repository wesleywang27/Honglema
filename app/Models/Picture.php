<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class TPicture
 */
class Picture extends Model{
    use SoftDeletes;
    
    protected $table = 'picture';

    public $timestamps = false;

    protected $fillable = [
        'uid',
        'file_id',
        'url',
        'upload_time'
    ];

    protected $guarded = [];

        
}