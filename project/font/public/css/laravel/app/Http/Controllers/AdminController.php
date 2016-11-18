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

class AdminController extends Controller
{
   	public function index()
   	{
       //return view('admin/goods');
   	}
}