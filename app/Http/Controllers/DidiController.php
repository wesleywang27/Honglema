<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/17
 * Time: 13:40
 */
namespace App\Http\Controllers;

use Validator;
use App\Models\Administrator;

class DidiController extends Controller{

    public function index(){
        return view('/didi/index');
    }
}