<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/16
 * Time: 14:38
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrator extends Model{
    protected $table = 'administrators';

    public $timestamps = false;

    protected  $fillable = [
        'name',
        'email',
        'password'
    ];
}