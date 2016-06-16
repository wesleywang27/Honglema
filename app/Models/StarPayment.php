<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 17:08
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StarPayment extends Model{
    protected $table = 'star_payments';

    public $timestamps = false;

    protected  $fillable = [
        'administrator_id',
        'star_id',
        'pay_at',
        'money'
    ];
}