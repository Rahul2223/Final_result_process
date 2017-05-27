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

Route::get('/studentlist','studentlist_controller@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',function(){

 return view('admins.login');
});
Route::get('index',function(){
 return view('admins.index');
});

Route::get('studentInfo',function(){
 return view('admins.studentInfo');
});
Route::get('addStudent',function(){
 return view('admins.addStudent');
});
// Route::get('studentInfol',function(){
//  return view('admins.studentInfo');
// });
 Route::get('editStudent',function(){
  return view('admins.editStudent');
 });
// Route::get('studentInfop',function(){
//  return view('admins.studentInfo');
// });
Route::get('teacherInfo',function(){
 return view('admins.teacherInfo');
});
Route::get('addTeacher',function(){
 return view('admins.addTeacher');
});
Route::get('editTeacher',function(){
 return view('admins.editTeacher');
});
