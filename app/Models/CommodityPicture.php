<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class TPicture
 */
class CommodityPicture extends Model{
    use SoftDeletes;
    
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