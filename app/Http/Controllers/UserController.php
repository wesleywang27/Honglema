<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/4/19
 * Time: 11:23
 */
namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Input;
use App\User;

class UserController extends Controller{
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            $user = User::paginate(6);
            return view('/cms/user',['users' => $user]);
        }
        else{
            return Redirect::intended('/cms/login.php');
        }
    }
}