<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model{
    protected $table = 'complaints';

    public $timestamps = false;
    
    public $primaryKey = 'complaint_id';

    protected  $fillable = [
        'merchant_id',
        'star_id',
        'task_id',
        'content',
        'status',
        'solution',
        'type'
    ];

    
}