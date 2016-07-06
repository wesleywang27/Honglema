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
    public function starUpdate($id, Request $request){
        $star = Star::where('star_id',$id)->first();
        $star->name = $request->input('name');
        $star->sex = $request->input('sex');
        $star->location = $request->input('location');
        $star->real_name = $request->input('real_name');
        $star->ID_number = $request->input('ID_number');
        $star->cellphone = $request->input('cellphone');
        $star->height = $request->input('height');
        $star->weight = $request->input('weight');
        $star->cup = $request->input('cup');
        $star->age = $request->input('age');
        $star->occupation = $request->input('occupation');
        $star->education = $request->input('education');
        $star->wechat = $request->input('wechat');
        $star->weibo_id = $request->input('weibo_id');
        $star->weipai_id = $request->input('weipai_id');
        $star->miaopai_id = $request->input('miaopai_id');
        $star->meipai_id = $request->input('meipai_id');
        $star->kuaishou_id = $request->input('kuaishou_id');
        $star->shirt_size = $request->input('shirt_size');
        $star->pants_size = $request->input('pants_size');
        $star->shoes_size = $request->input('shoes_size');
        $star->province = $request->input('province');
        $star->city = $request->input('city');
        $star->region = $request->input('region');
        $star->address = $request->input('address');
        $star->experience = $request->input('experience');

        $star->save();

        return Redirect::intended("/didi/StarInfo/$id")->with(['id' => $id]);
    }

    //网红审核
    public function starCheck($id){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::where('star_id',$id)->first();
            $star->status = 1;
            $star->save();

            return Redirect::intended('/didi/StarCheckList');
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    //网红列表页
    public function starList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $star = Star::paginate(20);

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
            $star = Star::where('status',0)->orderBy('created_at','desc')->paginate(20);
            
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