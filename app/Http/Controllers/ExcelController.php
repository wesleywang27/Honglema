<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Brand;
use App\Models\Designer;
use App\Models\Factory;
use App\Models\Stall;

class ExcelController extends Controller{
    //Excel文件导出功能
    public function exportStall(){
        $info = Stall::all();
        foreach ($info as $key => $value){
            $export[] = array(
                '用户ID' => $value['stall_id'],
                '用户名' => $value['username'],
                '手机号码' => $value['mobile'],
                '微信号' => $value['weixinNo'],
                '职位' => $value['title'],
                '档口名称' => $value['stallName'],
                '档口号' => $value['stallNum'],
                '档口地址(杭州/广州)' => $value['city'].$value['stall'],
                '档口地址(其它地区)' => $value['country'].$value['province'].$value['stallCity'].$value['region'].$value['address'],
                '档口服装风格' => $value['style'],
                '档口类目' => $value['category'],
                '是否支持一件代发' => $value['shipmentOK'],
            );
        }
        Excel::create('档口商家信息汇总',function($excel) use ($export){
            $excel->sheet('档口商家信息', function($sheet) use ($export){
                $sheet->fromArray($export);
            });
        })->export('xls');
    }
}