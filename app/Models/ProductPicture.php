<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TPicture
 */
class ProductPicture extends Model
{
    protected $table = 'product_picture';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'type',
        'file_id',
        'url',
        'upload_time'
    ];

    protected $guarded = [];
        
}