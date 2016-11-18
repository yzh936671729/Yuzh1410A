<?php
namespace App\Http\Controllers;
header('content-type:text/html;charset=utf-8');
use App\Http\Controllers;
use RouteServiceProvider;
use Illuminate\Routing\Redirector;
use Request;
use Response;
use Database;
use Input;
use Session;
use Mail;
use DB;

class AdminController extends Controller
{
   	public function index()
   	{

   	}
   	/**
   	 * 获取轮播图的图片
   	 * @return [type] [description]
   	 */
   	public function imgs()
   	{
   		//表名
         $table = 'img';
         //查询数据的名称
         $arr = "img_arr";
         return $arr = $this->select($table,$arr);

         // require_once('../app/libs/Response/ResponseClass.php');
   		// $imgsObj = DB::table('img')->get();
   		// echo Response::json(200,'数据返回成功',$imgsObj);
   	}
   	/**
   	 * 获取简介
   	 * @return [type] [description]
   	 */
   	public function desc()
   	{
   		//表名
         $table = 'desc';
         //查询数据的名称
         $arr = "desc_arr";
         return $arr = $this->select($table,$arr);
         // require_once('../app/libs/Response/ResponseClass.php');
   		// $descObj = DB::table('desc')->get();
   		// echo Response::json(200,'数据返回成功',$descObj);
   	}
   	/**
   	 * 获取资讯
   	 * @return [type] [description]
   	 */
   	public function consulte()
   	{
   		//表名
         $table = 'consulte';
         //查询数据的名称
         $arr = "consulte_arr";
         return $arr = $this->select($table,$arr);
         // require_once('../app/libs/Response/ResponseClass.php');
   		// $consulteObj = DB::table('consulte')->get();
   		// echo Response::json(200,'数据返回成功',$consulteObj);
   	}
   	/**
   	 * 绿色通道-个人信息入库
   	 * @return [type] [description]
   	 */
   	public function information_add()
   	{
   		$information_arr = Request::all();
         echo $this->dataBase($information_arr,'information');
   	}
   	/**
   	 * 推迟报道--信息入库
   	 * @return [type] [description]
   	 */
   	public function personal_add()
   	{
   		$personal_arr = Request::all();
         echo $this->dataBase($personal_arr,'personal');
   	}
   	/**
   	 * 个人中心--个人信息入库
   	 * @return [type] [description]
   	 */
   	public function myself_add()
   	{
   		$myself_arr = Request::all();
         echo $this->dataBase($myself_arr,'myself');
   	}
   	/**
   	 * 个人信息--宿舍预定入库
   	 * @return [type] [description]
   	 */
   	public function dormitory_add()
   	{
   		$dormitory_arr = Request::all();
         echo $this->dataBase($dormitory_arr,'dormitory');
   	}
   	/**
   	 * 个人信息--抵校登记
   	 * @return [type] [description]
   	 */
   	public function arrive_add()
   	{
   		$arrive_arr = Request::all();
         echo $this->dataBase($arrive_arr,'arrive');
   	}
   	/**
   	 * 个人信息--报道单
   	 * @return [type] [description]
   	 */
   	public function report_cart()
   	{
   		$sql = "select * from information,dormitory,personal where personal.name='于中豪' limit 1";
   		$report_arr = DB::select($sql);
         // print_r($report_arr);die;
   		// include('../app/libs/Response/ResponseClass.php');
   		echo json_encode($report_arr);
   	}
   	/**
   	 * 咨询帮助--我要提问
   	 * @return [type] [description]
   	 */
   	public function question_add()
   	{
   		$question_arr = Request::all();
         echo $this->dataBase($question_arr,'question');
   	}
   	/**
   	 * 查询我的提问
   	 * @return [type] [description]
   	 */
   	public function my_question()
   	{
   		$question_arr = DB::table("question")->get();
   		echo json_encode($question_arr);
   	}
}