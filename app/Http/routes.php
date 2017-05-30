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
Route::POST('/studentstore',['as'=>'studentstore','uses'=>'studentlist_controller@store']);
Route::get('/editStudent','studentlist_controller@editstudent');
Route::get('/','studentlist_controller@index');
Route::get('/editstudentinfo/{id}', ['as' => 'editstudentdata', 'uses' => 'studentlist_controller@edit']);

Route::POST('/updatestudentinfo', ['as' => 'updatestudentdata', 'uses' => 'studentlist_controller@update']);


Route::get('/teacherlist',['as'=>'teacherinfo','uses'=>'teachers_controller@teacherList']);
Route::get('/addteacher',['as'=>'addteacher','uses'=>'teachers_controller@addteacher']);
Route::POST('/teacherstore',['as'=>'teacherstore','uses'=>'teachers_controller@store']);
Route::get('/editTeacher','teachers_controller@editteacher');
Route::get('/editteacherinfo/{id}', ['as' => 'editteacherdata', 'uses' => 'teachers_controller@edit']);
Route::POST('/updateteacherinfo', ['as' => 'updateteacherdata', 'uses' => 'teachers_controller@update']);


Route::get('login',function(){

 return view('admins.login');
});
Route::get('index',function(){
return view('admins.index');
});
 /*Route::get('editStudent',function(){
  return view('admins.editStudent');
 });
*/
