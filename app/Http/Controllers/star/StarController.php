<?php

namespace App\Http\Controllers\star;

use App\Models\OAuthUser;
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
use App\Http\Controllers\Controller;
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

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $user = session('wechat.oauth_user');
        $openid = $user->openid;
        $star = Star::where('openid', $openid)->first();
        if ($star) {
            $_SESSION['star_id'] = $star->star_id;
            $star = Star::where('star_id', $star->star_id)->first();
            $starPictures= StarPicture::where('uid',$star->star_id)->get();
            return view('star/star_info', ["star" => $star, "pictures"=>$starPictures]);
        } else {
            $activityList = Activity::where('activity_status', 1)->orderBy('created_at','desc')->get();
            return view('star.visitor', ['list' => $activityList]);
        }
    }


    public function create()
    {
        $user = session('wechat.oauth_user');
        $star = Star::where('openid', $user->openid)->first();
        if ($star) {
            $_SESSION['star_id'] = $star->star_id;
            $star = Star::where('star_id', $star->star_id)->first();
            $starPictures= StarPicture::where('uid',$star->star_id)->get();
            return view('star.star_info', ["star" => $star, "pictures"=>$starPictures]);
        }else{
            return view('star.create', ["user" => $user]);
        }
    }

    public function order()
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $orders = Order::where('star_id', $star_id)->get();
        $data = array();
        foreach ($orders as $order) {
            //each order  has one task
            $task = Task::where('task_id', $order->task_id)->first();
            //each task belong to one activity
            $activity = Activity::where('activity_id', $task->activity_id)->first();
            //each activity belong to one  merchant
            $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
            //each activity has many commodity
            $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();
            //commodity array initialize
            $commodities = array();
            foreach ($relations as $relation) {
                $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->get();
            }

            $data[] = array('title' => $activity->title,
                'merchant_name' => $merchant->name,
                'picture'=>$activity->picture,
                'avatar' => $merchant->avatar,
                'total_price' => $activity->total_price,
                'requirement' => $activity->claim,
                'task_status' => $task->status,
                'order_status' => $order->status,
                'task_id' => $task->task_id,
                'merchant_id' => $merchant->merchant_id,
                'order_id' => $order->order_id);
        }
        return view('/star/star_order', ["data" => $data]);
    }

    public function merchant_info(Request $request)
    {
        $merchant_id = $request->input('merchant_id');
        $merchant = Merchant::where('merchant_id', $merchant_id)->first();
        return view('star/merchant_info', ["merchant" => $merchant]);
    }

    public function info(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $starPictures= StarPicture::where('uid',$star->star_id)->get();
        return view('star/star_info', ["star" => $star, "pictures"=>$starPictures]);

    }

    public function update()
    {
        $star_id = $_SESSION['star_id'];
        $star = Star::where('star_id', $star_id)->first();
        $input = Input::all();
        $formKey = array_keys($input);
        foreach ($formKey as $value) {
            if (isset($input[$value])) {
                $star->$value = $input[$value];
            }
        }
        $star->save();
    }

    public function register(Request $request)
    {
        $user = session('wechat.oauth_user');
        $openid = $user->openid;
        $input = Input::all();
        $star = new Star();
        $star->openid = $openid;

        $star->avatar=$user->avatar;
        $star->name = $request->input('name');
        $star->sex = $request->input('sex');
        $star->location = $request->input('location');
        $star->cup = $request->input('cup');
        $star->weight = $request->input('weight');
        $star->height = $request->input('height');
        $star->age = $request->input('age');

        $star->occupation = $request->input('occupation');
        $star->education = $request->input('education');
        $star->experience = $request->input('experience');
        $star->real_name = $request->input('real_name');
        $star->ID_number = $request->input('ID_number');
        $star->shirt_size = $request->input('shirt_size');
        $star->pants_size = $request->input('pants_size');
        $star->shoes_size = $request->input('shoes_size');

        $star->cellphone = $request->input('cellphone');
        $star->address = $request->input('address');
        $star->weibo_id = $request->input('weibo_id');
        $star->weipai_id = $request->input('weipai_id');
        $star->miaopai_id = $request->input('miaopai_id');
        $star->weipai_id = $request->input('weipai_id');
        $star->meipai_id = $request->input('meipai_id');
        $star->kuaishou_id = $request->input('kuaishou_id');
        $star->save();

        $star = Star::where('openid', $openid)->first();
        $_SESSION['star_id'] = $star->star_id;
        for ($x = 0; $x < 6; $x++) {
            if (isset($input['imgurl' . $x])) {
                $url = $request->input('imgurl' . $x);
                $starPicture = new StarPicture();
                $starPicture->url = $url;
                $starPicture->file_id = pathinfo($url)['filename'];
                $starPicture->uid = $star->star_id;
                $starPicture->save();
            }
        }
        return view('star/star_info', ["star" => $star]);
    }

    public function uploadimg(Request $request)
    {
        $star_id = $_SESSION['star_id'];
        $url = $request->input('url');
        $starPicture = new StarPicture();
        $starPicture->url = $url;
        $starPicture->file_id = pathinfo($url)['filename'];
        $starPicture->uid = $star_id;
        $starPicture->save();
    }


    public function order_detail(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        //each order  has one task
        $task = Task::where('task_id', $order->task_id)->first();
        //each task belong to one activity
        $activity = Activity::where('activity_id', $task->activity_id)->first();
        //each activity belong to one  merchant
        $merchant = Merchant::where('merchant_id', $activity->merchant_id)->first();
        //each activity has many commodity
        $relations = DB::table('activity_commodity_lists')->where('activity_id', $activity->activity_id)->get();
        //commodity array initialize
        $commodities = array();
        foreach ($relations as $relation) {
            $commodities[] = Commodity::where('commodity_id', $relation->commodity_id)->get();
        }
        $data = array('order' => $order,
            'task' => $task,
            'order_status'=>$order->status,
            'task_status'=>$task->status,
            'activity' => $activity,
            'merchant' => $merchant,
            'commodities' => $commodities,
        );
        return view('star/order_detail', ["data" => $data]);

    }

    public function cancelOrder(Request $request)
    {
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $order->status='0';
        $order->save();

    }

    public function  task_result(Request $request)
    {
        $order_id = $request->input('order_id');
        return view('star/task_result', ['order_id' => $order_id]);
    }

    public function submitTaskResult(Request $request)
    {
        // 网红提交结果，修改任务状态为3（已推广） 
        $order_id = $request->input('order_id');
        $order = Order::where('order_id', $order_id)->first();
        $task = Task::where('task_id', $order->task_id)->first();
        $task->status = 3;
        $task->save();

        $img1 = $request->input('img1');
        $img2 = $request->input('img2');
        $img3 = $request->input('img3');
        $img4 = $request->input('img4');
        if (isset($img1)) {
            $tp = new TaskPicture();
            $tp->task_id = $task_id;
            $tp->url = $img1;
            $tp->file_id = pathinfo($img1)['filename'];
            $tp->save;
        }
        if (isset($img2)) {
            $tp = new TaskPicture();
            $tp->order_id = $task_id;
            $tp->url = $img2;
            $tp->file_id = pathinfo($img2)['filename'];
            $tp->save;
        }
        if (isset($img3)) {
            $tp = new TaskPicture();
            $tp->order_id = $task_id;
            $tp->url = $img3;
            $tp->file_id = pathinfo($img3)['filename'];
            $tp->save;
        }
        if (isset($img4)) {
            $tp = new TaskPicture();
            $tp->order_id = $task_id;
            $tp->url = $img4;
            $tp->file_id = pathinfo($img4)['filename'];
            $tp->save;
        }

    }


    /*跳转到获得界面*/
    public function activity()
    {
        $items = array(
            array("Adidas", "阿迪达斯推广活动", "5W", "2016-6-13 24:00", "adidas.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
        );
        return view('star/star_activity', ['items' => $items]);
    }


    /*订单的三种类型,1.抢单中:contention
                   2.进行中:process
                   3.可评论:comment  */
    public function process()
    {
        $items = array(
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Adidas", "阿迪达斯推广活动", "5W", "2016-6-13 24:00", "adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items, 'type' => 'process']);
    }

    public function comment()
    {
        $items = array(
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Adidas", "阿迪达斯推广活动", "5W", "2016-6-13 24:00", "adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items, 'type' => 'comment']);
    }


    public function contention()
    {
        $items = array(
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg"),
            array("Adidas", "阿迪达斯推广活动", "5W", "2016-6-13 24:00", "adidas.jpg"),
        );
        return view('/star/star_order', ['items' => $items, 'type' => 'contention']);
    }

    /*显示全部订单*/
    public function all_order()
    {
        $items = array(
            array("Nike", "耐克推广活动", "5W", "2016-6-14 24:00", "nike.jpg", 'process'),
            array("Adidas", "阿迪达斯推广活动", "5W", "2016-6-13 24:00", "adidas.jpg", 'contention'),
        );
        return view('/star/star_order', ['items' => $items, 'type' => 'order']);
    }

    /*显示某一争抢订单详情*/
    public function show_contention()
    {
        $act_name = "Adidas";
        $act_price = "5w";
        $act_date = "2016年6月5日";
        $act_require = "活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info = "绿色 ";
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order', ['act_name' => $act_name, 'act_price' => $act_price,
            'act_date' => $act_date, 'act_require' => $act_require, 'item_info' => $item_info, 'type' => 'contention', 'pic' => 'square_header.jpeg']);
    }

    /*显示某一进行中订单详情*/
    public function show_process()
    {
        $act_name = "Adidas";
        $act_price = "5w";
        $act_date = "2016年6月5日";
        $act_require = "活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info = "绿色 ";
        $act_schedule = array(
            array("2016-06-12 10:00", "2016-06-12 15:00"),
            array("2016-06-14 15:00", "2016-06-12 18:00"),
        );
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order', ['act_name' => $act_name, 'act_price' => $act_price,
            'act_schedule' => $act_schedule, 'act_require' => $act_require, 'item_info' => $item_info, 'type' => 'process', 'pic' => 'square_header.jpeg']);
    }

    /*评论界面*/
    public function show_comment()
    {
        $act_name = "Adidas";
        $act_price = "5w";
        $act_date = "2016年6月5日";
        $act_require = "活动要求按时打扫打扫打扫打扫打扫的撒大实打实的阿斯顿阿萨德阿什顿阿斯达阿斯达十大十大阿萨帝爱仕达阿斯达十大爱上大s的爱上 ";
        $item_info = "绿色 ";
        $company_name = 'Adidas官方店';
        //$data=array($act_name,$act_price,$act_date,$act_require,$item_info);
        return view('star/show_order', ['act_name' => $act_name, 'act_price' => $act_price,
            'company_name' => $company_name, 'type' => 'comment', 'pic' => 'square_header.jpeg']);
    }


}
