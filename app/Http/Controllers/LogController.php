<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/5/12
 * Time: 13:57
 */
namespace App\Http\Controllers;

use App\Models\Log;

class LogController extends Controller{
    //操作日志列表
    public function index(){
        session_start();
        if(isset($_SESSION['username'])){
            if($_SESSION['is_super_admin'] == 0){
                echo "<script>history.go(-1); alert('该用户没有权限访问!');</script>";
                return;
            }
            else{
                $_SESSION['active'] = 'log';
                $log = Log::paginate(10);
                return view('/cms/log',['logs' => $log]);
            }
        }
        else{
            return Redirect::intended('/cms/login');
        }
    }
}