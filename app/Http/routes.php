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

Route::get('/studentlist',['as'=>'studentinfo','uses'=>'studentlist_controller@studentList']);
Route::get('/addstudent',['as'=>'addstudent','uses'=>'studentlist_controller@addstudent']);
//Route::get('/store',['as'=>'store','uses'=>'studentlist_controller@store']);
Route::POST('/store',['as'=>'store','uses'=>'studentlist_controller@store']);

Route::get('/','studentlist_controller@index');
Route::get('/teacherInfo','studentlist_controller@teacher');
Route::get('/addTeacher','studentlist_controller@addteacher');



Route::get('login',function(){

 return view('admins.login');
});
Route::get('index',function(){
return view('admins.index');
});
 Route::get('editStudent',function(){
  return view('admins.editStudent');
 });

