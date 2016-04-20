<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    //Excel文件导出功能 By Laravel学院
    public function exportStall(){
        $cellData = [
            ['学号','姓名','成绩'],
            ['10001','AAAAA','99'],
            ['10002','BBBBB','92'],
            ['10003','CCCCC','95'],
            ['10004','DDDDD','89'],
            ['10005','EEEEE','96'],
        ];
        Excel::create('学生成绩',function($excel) use ($cellData){
            $excel->sheet('score', function($sheet) use ($cellData){
                $sheet->rows($cellData);
            });
        })->download('xls');
        echo "<script>alert('导出!');</script>";
        return view('/cms/index');
    }
}