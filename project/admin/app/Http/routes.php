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

Route::any('/','AdminController@index');
Route::any('imgs','AdminController@imgs');
Route::any('desc','AdminController@desc');
Route::any('consulte','AdminController@consulte');
Route::any('information_add','AdminController@information_add');
Route::any('personal_add','AdminController@personal_add');
Route::any('myself_add','AdminController@myself_add');
Route::any('dormitory_add','AdminController@dormitory_add');
Route::any('arrive_add','AdminController@arrive_add');
Route::any('report_cart','AdminController@report_cart');
Route::any('question_add','AdminController@question_add');
Route::any('my_question','AdminController@my_question');
