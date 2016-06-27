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
    //网红添加页
    public function starCreate(){
        session_start();
        if(isset($_SESSION['name'])) {
            return view('/didi/star_create');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //添加网红信息
    public function starStore(Request $request){
        
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

    //网红修改页
    public function starModify($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::where('star_id',$id)->first();
            $picture = StarPicture::where('uid',$id)->get();

            return view('/didi/star_modify',['star' => $star ,'pictures' => $picture]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //修改网红信息
    public function starUpdate($id){
        session_start();
        if(isset($_SESSION['name'])) {

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

    //网红审核列表页
    public function starCheckList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::where('status',0)->paginate(10);
            
            return view ('/didi/star_list',['stars' => $star]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //网红详情页
    public function starInfo($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::where('star_id',$id)->first();
            $picture = StarPicture::where('uid',$id)->get();

            return view('/didi/star_info',['star' => $star ,'pictures' => $picture]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
}