<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 17:07
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MerchantPayment extends Model{
    protected $table = 'merchant_payments';

    public $timestamps = false;

    protected  $fillable = [
        'activity_id',
        'create_at',
        'pay_at',
        'status'
    ];
}