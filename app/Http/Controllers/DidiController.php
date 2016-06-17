<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/17
 * Time: 13:40
 */
namespace App\Http\Controllers;

use Hash;
use Validator;
use App\Models\Administrator;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Redirect;

class DidiController extends Controller{

    public function index(){
        session_start();
        if(isset($_SESSION['name'])){
            return view('/didi/index');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    public function loginIndex(){
        return view('/didi/login');
    }

    public function login(Request $request){
        $name = $request->input('name');
        $password = $request->input('password');

        $administrator = Administrator::where('name',$name)->where('password',$password);
        if($administrator){
            session_start();
            $_SESSION['name'] = $name;
            return Redirect::intended('/didi/index');
        }
    }

    public function logout(){
        session_start();
        unset($_SESSION['name']);
        return Redirect::intended('/didi/login');
    }
}