<?php
/**
 *
 */
namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ComplaintController extends Controller {
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

}
