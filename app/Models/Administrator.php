<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/16
 * Time: 14:38
 */
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Administrator extends Authenticatable{
    protected $table = 'administrators';

    public $timestamps = false;

    public $primaryKey = 'admin_id';

    protected  $fillable = [
        'name',
        'email',
        'password'
    ];
}