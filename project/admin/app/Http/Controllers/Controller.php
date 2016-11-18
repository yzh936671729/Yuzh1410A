<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Response;
use Memcache;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * 数据库的添加
     * @param  array     $data  添加的数据
     * @param  variable  $table 表名
     * @return json
     */
    public static function dataBase($data,$table)
    {
   		foreach($data as $key => $v){
   			if ($v == ""){
   				unset($data[$key]);
   			}
   		}
   		$callback = $data['callback'];
   		
   		unset($data['_']);
   		unset($data['callback']);
   		// print_r($information_arr);die;
   		$re = DB::table($table)->insert($data);
   		// print_r($re);die;
   		if ($re){		
	   		require_once('../app/libs/Response/ResponseClass.php');
	   		return $callback.'('.Response::json('200','数据返回成功',$data).')';
   		}
	  }
    /**
     * 数据库的查询
     * @param  variable  $table 表名
     * @param  array     $arr   mem中的key
     * @return json        
     */
    public function select($table,$arr)
    {
      $mem = new Memcache;
      $mem->connect("127.0.0.1",11211);
      if (!$mem->get($arr)){
        // echo 1;
        $data = DB::table($table)->get();
        // print_r($img_arr);die;
        require_once('../app/libs/Response/ResponseClass.php');
        $imgsObj = Response::json(200,'数据返回成功',$data);
        $mem->set($arr,$imgsObj);
        return $imgsObj = $mem->get($arr);
      } else {
        // echo 2;
        return $mem->get($arr);
      }
    }
}
