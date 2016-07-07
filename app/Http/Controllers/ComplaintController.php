<?php
/**
 *
 */
namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Merchant;
use App\Models\Star;
use App\Models\Task;
use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComplaintController extends Controller {
    // 投诉详情
    public function complaintInfo($id) {
        session_start();
        if(isset($_SESSION['name'])) {
            $complaint = Complaint::where('complaint_id',$id)->first();
            $merchant = Merchant::where('merchant_id',$complaint->merchant_id)->first();
            $star = Star::where('star_id', $complaint->star_id)->first();
            $task = Task::where('task_id', $complaint->task_id)->first();
            $title = Activity::where('activity_id', $task->activity_id)->first()->title;

            return view('/didi/complaint_info',
                        ['complaint' => $complaint ,'merchant' => $merchant, 'star' => $star, 'title' => $title]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }
  
    //投诉列表页
    public function complaintList(){
        session_start();
        if(isset($_SESSION['name'])) {
            $complaints = Complaint::orderBy('created_at','desc')->paginate(20);

            return view('/didi/complaint_list',['complaints' => $complaints]);
        }
        else{
            return Redirect::intended('/didi/login');
        }
    }

    public function submitSolution() {
    }

}
