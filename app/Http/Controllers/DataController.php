<?php
/**
 * Created by IntelliJ IDEA.
 * User: 王得屹
 * Date: 2016/5/11
 * Time: 11:29
 */
namespace App\Http\Controllers;

use mysqli;

class DataController extends Controller{
    //数据库备份
    public function dataBackup(){
        //配置信息
        $cfg_dbhost = 'localhost';
        $cfg_dbname = 'homestead';
        $cfg_dbuser = 'root';
        $cfg_dbpwd = '';
        $cfg_db_language = 'utf8';
        $to_file_name = date("YmdHis_",time())."backup.sql";
        // END 配置

        //链接数据库
        $conn = new mysqli($cfg_dbhost, $cfg_dbuser, $cfg_dbpwd, $cfg_dbname);
        //选择编码
        $conn -> query("set names ".$cfg_db_language);
        //数据库中有哪些表
        $tables = $conn -> query( 'show tables;' );
        //将这些表记录到一个数组
        $tabList = array();
        while($row = $tables->fetch_row()){
            $tabList[] = $row[0];
        }
        echo "数据备份中，请耐心等待...<br/>";
        $info = "-- ----------------------------\r\n";
        $info .= "-- 备份时间：".date("Y-m-d H:i:s",time())."\r\n";
        $info .= "-- ----------------------------\r\n\r\n";
        file_put_contents($to_file_name,$info,FILE_APPEND);

        //将每个表的表结构导出到文件
        foreach($tabList as $val){
            $sql = "show create table ".$val;
            $res = $conn -> query($sql);
            $row = $res->fetch_array();
            $info = "-- ----------------------------\r\n";
            $info .= "-- Table structure for `".$val."`\r\n";
            $info .= "-- ----------------------------\r\n";
            $info .= "DROP TABLE IF EXISTS `".$val."`;\r\n";
            $sqlStr = $info.$row[1].";\r\n\r\n";
            //追加到文件
            file_put_contents($to_file_name,$sqlStr,FILE_APPEND);
            //释放资源
            $res->close();
        }

        //将每个表的数据导出到文件
        foreach($tabList as $val){
            $sql = "select * from ".$val;
            $res = $conn -> query($sql);
            //如果表中没有数据，则继续下一张表
            //if(mysql_num_rows($res)<1) continue;
            //
            $info = "-- ----------------------------\r\n";
            $info .= "-- Records for `".$val."`\r\n";
            $info .= "-- ----------------------------\r\n";
            file_put_contents($to_file_name,$info,FILE_APPEND);
            //读取数据
            while($row = $res->fetch_row()){
                $sqlStr = "INSERT INTO `".$val."` VALUES (";
                foreach($row as $zd){
                    $sqlStr .= "'".$zd."', ";
                }
                //去掉最后一个逗号和空格
                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
                $sqlStr .= ");\r\n";
                file_put_contents($to_file_name,$sqlStr,FILE_APPEND);
            }
            //释放资源
            $res->close();
            file_put_contents($to_file_name,"\r\n",FILE_APPEND);
        }
        $conn->close();
        echo "备份完成!";
    }
}