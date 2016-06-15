<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/12
 * Time: 12:11
 */
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Validator;
class Star extends Model{
    protected $table = 'stars';

    public $timestamps = false;

    protected  $primaryKey = 'star_id';

    protected  $fillable = [
        'avatar',
        'name',
        'sex',
        'location',

        'cup',
        'weight',
        'height',
        'age',
        'occupation',
        'education',

        'experience',
        'real_name',
        'ID_number',
        'cellphone',

        'weibo_id',
        'weipai_id',
        'miaopai_id',
        'meipai_id',
        'kuaishou_id',
        'shirt_size',
        'pants_size',
        'shoes_size',
        'province',
        'city',
        'region',
        'address',
        'wechat',
        'alipay_name',
        'alipay_account',
        'ID_card1',
        'ID_card2'
    ];

    public function __construct($input)
    {
        $rule = array(
            'name'                       => 'required',
            'sex'                        => 'required',
            'location'                   => 'required',

/*            'cup'                        => 'required',
            'weight'                     => 'required',
            'height'                     => 'required',
            'age'                        => 'required',
            'occupation'                 => 'required',
            'education'                  => 'required',
            'real_name'                  => 'required',
            'ID_number'                  => 'required',
            'cellphone'                  => 'required',

            'shirt_size'                 => 'required',
            'pants_size'                 => 'required',
            'shoes_size'                 => 'required',

            'address'                    => 'required',
            'wechat'                     => 'required',
            'alipay_account'             => 'required',*/
        );
        $messages = [
            'required' => ':attribute 的字段是必要的。',
        ];
        $this->init($input, $rule,$messages);
    }

    public $_validator;

    public function init($input, $rule = array(),$messages)
    {
        $this->_validator = Validator::make($input, $rule,$messages);

        $formKey = array_keys($input);
        // 遍历表单键值 并赋予类成员
        foreach ($formKey as $value)
        {
            if(isset($input[$value]))
            {
                $this->$value = $input[$value];
            }
        }
    }

    public function validator()
    {
        return $this->_validator;
    }

    public function isValid()
    {
        return !$this->_validator->fails();
    }

    public function starPictures()
    {
        return $this->hasMany('App\Models\StarPictures', 'id');
    }


}