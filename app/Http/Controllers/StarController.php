<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/6/23
 * Time: 11:29
 */
namespace App\Http\Controllers;

use App\Models\Star;
use App\Models\StarPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StarController extends Controller{
    //添加网红页
    public function starCreate(){

    }
    //删除网红
    public function starDelete($id){
        session_start();
        if(isset($_SESSION['name'])) {
            Star::where('star_id',$id)->delete();

            return Redirect::intended('/didi/StarList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
    //网红列表页
    public function starList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::paginate(10);

            return view('/didi/star_list',['stars' => $star]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}