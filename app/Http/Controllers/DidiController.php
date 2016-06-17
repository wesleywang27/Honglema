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
use Illuminate\Support\Facades\Redirect;

class DidiController extends Controller{

    public function index(){
        return view('/didi/index');
    }

    public function loginIndex(){
        return view('/didi/login');
    }

    public function login(){
        return Redirect::intended('/didi/index');
    }

    public function logout(){
        return Redirect::intended('/didi/login');
    }
}