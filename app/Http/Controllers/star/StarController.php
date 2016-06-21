<?php

namespace App\Http\Controllers\star;
use Illuminate\Http\Request;
use App\Models\Star;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Activity;
use App\Models\Task;
use App\Models\StarPicture;
use App\Models\Order;
use App\Models\Merchant;
use App\Models\Commodity;
use App\Models\ProductPicture;
use DB;
class StarController extends RootController
{
    /* $oauthUser->openid   = $original['openid'];
           $oauthUser->unionid  = $original['unionid'];
           $oauthUser->nickname = $original['nickname'];
           $oauthUser->sex      = $original['sex'] === 1? Config::get("constants.SEX.MALE") : Config::get("constants.SEX.FEMALE");
           $oauthUser->language = $original['language'];
           $oauthUser->city     = $original['city'];
           $oauthUser->province = $original['province'];
           $oauthUser->country  = $original['country'];*/

           public function __construct(){
              parent::__construct();
           }

    public function index(){
        $user = session('wechat.oauth_user');
        $openid =$user->openid;
     // $openid="001";
        $star = Star::where('openid',$openid)->first();
        if($star){
            $_SESSION['star_id']=$star->star_id;
            return view('star/star_info',["star"=>$star]);
        }else{
            return view('star/visitor', ["user" => $user]);
        }
    }


    public function order(){
        $star_id = $_SESSION['star_id'];
        $star =  Star::where('star_id',$star_id)->first();
        $orders = Order::where('star_id',$star_id)->get();
         $data = array();
        foreach($orders as $order){
            //each order  has one task
            $task = Task::where('task_id',$order->task_id)->first();
            //each task belong to one activity
            $activity = Activity::where('activity_id',$task->activity_id)->first( );
            //each activity belong to one  merchant
            $merchant = Merchant::where('merchant_id',$activity->merchant_id)->first();
            //each activity has many commodity
            $relations = DB::table('activity_commodity_lists')->where('activity_id',$activity->activity_id)->get();
            //commodity array initialize
            $commodities = array();
            foreach($relations as $relation){
                $commodities[] =Commodity::where('commodity_id',$relation->commodity_id)->get(); 
            }

            $data[]=array('title'=>$activity->title,
                'merchant_name'=>$merchant->name,
                'avatar'=>$merchant->avatar,
                'total_price'=>$activity->total_price,
                'requirement'=>$activity->claim,
                'task_status'=>$task->status,
                'order_status'=>$order->status,
                'task_id'=>$task->task_id,
                'merchant_id'=>$merchant->merchant_id,
                'order_id' =>$order->order_id);
        }
        return view('/star/star_order',["data"=>$data]);
    }

         public function merchant_info(Request $request){
            $merchant_id =$request->input('merchant_id');
            $merchant = Merchant::where('merchant_id',$merchant_id)->first();
              return view('star/merchant_info',["merchant"=>$merchant]);
    }

    public function create(){
         $user = session('wechat.oauth_user');
        return view('star/create', ["user" => $user]);
    }

    public function info(Request $request){
        $star_id =  $_SESSION['star_id'];
        $star = Star::where('star_id',$star_id)->first();
        return view('star/star_info',["star"=>$star]);
    }

    public function update(){
         $star_id =  $_SESSION['star_id'];
       $star = Star::where('star_id',$star_id)->first();
        $input =Input::all();
        $formKey = array_keys($input);
        foreach ($formKey as $value)
        {
            if(isset($input[$value]))
            {
                $star->$value = $input[$value];
            }
        }
        $star->save();
    }

    public function register(Request $request){
        $user = session('wechat.oauth_user');
        $openid =$user->openid;
        $input =Input::all();
        $star = new Star();
        $star->openid =  $openid;
        $formKey = array_keys($input);
        foreach ($formKey as $value)
        {
            if(isset($input[$value]))
            {
                $star->$value = $input[$value];
            }
        }
        $star->save();
       $star = Star::where('openid',$oepnid)->first();

        for($x=0;$x<6;$x++){
          if(isset($input['imgurl'.$x])){
             $url =$request->input('imgurl'.$x);
             $starPicture = new StarPicture();
             $starPicture->url = $url;
             $starPicture->file_id = pathinfo($url)['filename'];
             $starPicture->uid = $star_id;   
             $starPicture->save();
        }}

        return view('star/star_info',["star"=>$star]);
    }

    public function uploadimg(Request $request){
        $star_id =  $_SESSION['star_id'];
        $url =$request->input('url');
        $starPicture = new StarPicture();
        $starPicture->url = $url;
        $starPicture->file_id = pathinfo($url)['filename'];
        $starPicture->uid = $star_id;   
        $starPicture->save();
    }


    public function order_detail(Request $request){
         $order_id =$request->input('order_id');
          $order = Order::where('order_id',$order_id)->first();
             //each order  has one task
            $task = Task::where('task_id',$order->task_id)->first();
            //each task belong to one activity
            $activity = Activity::where('activity_id',$task->activity_id)->first( );
            //each activity belong to one  merchant
            $merchant = Merchant::where('merchant_id',$activity->merchant_id)->first();
            //each activity has many commodity
            $relations = DB::table('activity_commodity_lists')->where('activity_id',$activity->activity_id)->get();
            //commodity array initialize
            $commodities = array();
            foreach($relations as $relation){
                $commodities[] =Commodity::where('commodity_id',$relation->commodity_id)->get(); 
            }
              $data =array('order'=>$order,
                'task'=>$task,
                'activity'=>$activity,
                'merchant'=>$merchant,
                'commodities'=>$commodities,
                );
              return view('star/order_detail',["order"=>$data]);

    }

    public function cancelOrder(Request $request){
         $order_id =$request->input('order_id');
         $status =$request->input('status');
        $order = Order::where('order_id',$order_id)->first();
         $order->status =$status; 
         $order->save();
    }

    public function  task_result(Request $request){
        $order_id = $request->input('order_id');
         return view('star/task_result',['order_id'=>$order_id]);
    }

    public function submitTaskResult(Request $request){
         $order_id = $request->input('order_id');
           $img1 = $request->input('img1');
           $img2 = $request->input('img2');
            $img3 = $request->input('img3');
            $img4 = $request->input('img4');
             $task = Task::where('task_id',$order->task_id)->first();
              $task = Task::where('task_id',$task_id)->first();
         $task->status =4; 
         $task->save();
         if(isset( $img1)){
          $tp = new TaskPicture();
          $tp->order_id = $order_id;
          $tp->url =$img1;
          $tp->file_id =pathinfo($url)['filename'];
         $tp->save;
      }
      if(isset($img2)){
          $tp = new TaskPicture();
          $tp->order_id = $order_id;
          $tp->url =$img2;
          $tp->file_id =pathinfo($url)['filename'];
          $tp->save;
      }if(isset($img3)){
          $tp = new TaskPicture();
          $tp->order_id = $order_id;
          $tp->url =$img3;
          $tp->file_id =pathinfo($url)['filename'];
          $tp->save;
      }
      if(isset($img4)){
          $tp = new TaskPicture();
          $tp->order_id = $order_id;
          $tp->url =$img4;
          $tp->file_id =pathinfo($url)['filename'];
          $tp->save;
      }

    }

    
    /*跳转到获得界面*/
    public function activity() {
        $items=array(
            array("Adidas","阿迪达斯推广活动","5W","2016-6-13 24:00","adidas.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
            array("Nike","耐克推广活动","5W","2016-6-14 24:00","nike.jpg"),
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




}
