<?php
namespace App\Http\Controllers;
header('content-type:text/html;charset=utf-8');
use App\Http\Controllers;
use RouteServiceProvider;
use Illuminate\Routing\Redirector;
use Request;
use Input;
use Session;
use Mail;
use DB;

class IndexController extends Controller
{
   	/**
   	 * 加载首页
   	 * @return [type] [description]
   	 */
   	public function index()
   	{
         //轮播图
         $url1 = "http://localhost/11/project/admin/public/imgs";
         $arr1 = file_get_contents($url1);
         // print_r($arr1);die;
         $imgsObj = json_decode($arr1,true);

         // print_r($imgsObj);die;
         //简介
         $url2 = "http://localhost/11/project/admin/public/desc";
         $arr2 = file_get_contents($url2);
         $descObj = json_decode($arr2,true);
         //资讯
         $url3 = "http://localhost/11/project/admin/public/consulte";
         $arr3 = file_get_contents($url3);
         // print_r($arr3);die;
         $consulteObj = json_decode($arr3,true);
         return view('index/index',['imgsObj'=>$imgsObj['data'],'descObj'=>$descObj['data'],'consulteObj'=>$consulteObj['data']]);
   	}
   	/**
   	 * 加载自助报到
   	 * @return [type] [description]
   	 */
   	public function report()
   	{
   		return view('index/sell-report');
   	}
   	/**
   	 * 加载绿色通道
   	 * @return [type] [description]
   	 */
   	public function green()
   	{
   		return view('index/green');
   	}
   	/**
   	 * 加载抵校登记
   	 * @return [type] [description]
   	 */
   	public function arrive()
   	{
   		return view('index/arrive');
   	}
   	/**
   	 * 加载推迟报到
   	 * @return [type] [description]
   	 */
   	public function delay()
   	{
   		return view('index/delay');
   	}
   	/**
   	 * 加载入学须知
   	 * @return [type] [description]
   	 */
   	public function must_know()
   	{
   		return view('index/must-know');
   	}
   	/**
   	 * 加载通知公告
   	 * @return [type] [description]
   	 */
   	public function notice()
   	{
   		return view('index/notice');
   	}
    public function noticeDetail()
    {
      return view('index/noticeDetail');
    }
   	/**
   	 * 加载资料下载
   	 * @return [type] [description]
   	 */
   	public function data()
   	{
   		return view('index/data');
   	}
      /**
       * 接在资讯帮助
       * @return [type] [description]
       */
   	public function ask()
   	{
   		return view('index/ask');
   	}
      /**
       * 加载自助入学
       * @return [type] [description]
       */
      public function entrance()
      {
         return view('index/entrance');
      }
      /**
       * 加载个人中心
       * @return [type] [description]
       */
      public function user_center()
      {
         return view('index/user_center');
      }
      /**
       * 加载到校路线
       * @return [type] [description]
       */
      public function route()
      {
         return view('index/route');
      }
      /**
       * 加载常见问题
       * @return [type] [description]
       */
      public function commonquestion()
      {
         return view('index/commonquestion');
      }
      /**
       * 加载资讯解答
       * @return [type] [description]
       */
      public function answer()
      {
         return view('index/answer');
      }
      /**
       * 加载我的提问
       * @return [type] [description]
       */
      public function myanswer()
      { 
        $url = "http://www.admin.com/my_question";
        $arr = file_get_contents($url);
        $question_arr = json_decode($arr,true);
        return view('index/myanswer',['question_arr'=>$question_arr]);
      }
      /**
       * 加载我要提问
       * @return [type] [description]
       */
      public function tiwen()
      {
         return view('index/tiwen');
      }
      /**
       * 加载解答页面
       * @return [type] [description]
       */
      public function uploaDate()
      {
         return view('index/uploaDate');
      }
      /**
       * 加载个人信息页面
       * @return [type] [description]
       */
      public function user_info()
      {
         return view('index/user_info');
      }
      /**
       * 加载个人信息--宿舍预定
       * @return [type] [description]
       */
      public function dorm_book()
      {
        return view('index/dorm_book');
      }
      /**
       * 加载个人信息--抵校登记
       * @return function [description]
       */
      public function next()
      {
        return view('index/next');
      }
      /**
       * 加载个人信息--报到单
       * @return [type] [description]
       */
      public function next_next()
      {
        $url = "http://www.admin.com/report_cart";
        $arr = file_get_contents($url);
        $report_arr = json_decode($arr,true);
        // print_R($report_arr);die;  
        return view('index/reportCard',['report_arr'=>$report_arr]);
      }
}