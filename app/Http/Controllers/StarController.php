<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Star;
use App\Models\Celebrity;
class StarController extends Controller
{

    /*跳转到获得界面*/
    public function activity() {
        $items=array(
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
      );
        return view('star/star_activity', ['items' => $items]);
    }


    /*订单的三种类型,1.抢单中:contention
                   2.进行中:process
                   3.可评论:comment  */
    public function process(){
        $items=array(
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items,'type'=>'process']);
    }

    public function comment(){
        $items=array(
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items,'type'=>'comment']);
    }

    public function contention() {
        $items=array(
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items,'type'=>'contention']);
    }

    /*显示全部订单*/
    public function all_order(){
        $items=array(
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg",'process'),
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg",'contention'),
        );
        return view('/star/star_order', ['items' => $items,'type'=>'order']);
    }
    /*显示某一争抢订单详情*/
    public function show_contention(){
        $act_name="Adidas";
        $act_price ="5w";
        $act_date="2016年6月5日";
        $act_require="活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info="绿色 ";
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order',['act_name'=>$act_name, 'act_price'=>$act_price,
        'act_date'=>$act_date,'act_require'=>$act_require,'item_info'=>$item_info,'type'=>'contention','pic'=>'square_header.jpeg']);
    }

    /*显示某一进行中订单详情*/
    public function show_process(){
        $act_name="Adidas";
        $act_price ="5w";
        $act_date="2016年6月5日";
        $act_require="活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info="绿色 ";
        $act_schedule=array(
            array("2016-06-12 10:00","2016-06-12 15:00"),
            array("2016-06-14 15:00","2016-06-12 18:00"),
        );
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order',['act_name'=>$act_name, 'act_price'=>$act_price,
            'act_schedule'=>$act_schedule,'act_require'=>$act_require,'item_info'=>$item_info,'type'=>'process','pic'=>'square_header.jpeg']);
    }

    /*评论界面*/
    public function show_comment(){
        $act_name="Adidas";
        $act_price ="5w";
        $act_date="2016年6月5日";
        $act_require="活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info="绿色 ";
        $company_name='Adidas官方店';
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order',['act_name'=>$act_name, 'act_price'=>$act_price,
            'company_name'=>$company_name,'type'=>'comment','pic'=>'square_header.jpeg']);
    }

    /*评论界面*/
    public function info(){
        return view('star/star_info');
    }

    public function addCele(Request $request){
    	  $celebrities = new Star();
    	  $celebrities->realname = $request->input('realname');
    	   $celebrities->save();
    }

    public function deleteCele(Request $request){
    	$realname=$request->input('realname');
    	$deleted = DB::delete('delete from t_star where realname=?',[$realname]);
    }
}
