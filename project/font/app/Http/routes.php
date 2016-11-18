<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::any('/','LoginController@index');
Route::any('index/index','IndexController@index');
Route::any('index/report','IndexController@report');
Route::any('index/green','IndexController@green');
Route::any('index/arrive','IndexController@green');
Route::any('index/delay','IndexController@delay');
Route::any('index/must_know','IndexController@must_know');
Route::any('index/notice','IndexController@notice');
Route::any('index/data','IndexController@data');
Route::any('index/ask','IndexController@ask');
Route::any('index/entrance','IndexController@entrance');
Route::any('index/user_center','IndexController@user_center');
Route::any('index/route','IndexController@route');
Route::any('index/commonquestion','IndexController@commonquestion');
Route::any('index/answer','IndexController@answer');
Route::any('index/myanswer','IndexController@myanswer');
Route::any('index/tiwen','IndexController@tiwen');
Route::any('index/uploaDate','IndexController@uploaDate');
Route::any('index/user_info','IndexController@user_info');
Route::any('index/dorm_book','IndexController@dorm_book');
Route::any('index/next','IndexController@next');
Route::any('index/next_next','IndexController@next_next');
Route::any('index/noticeDetail','IndexController@noticeDetail');
