<?php

Route::get('/subteacher/login','classteacher_controller@subloginpage');
Route::post('/subteacher/afterlogin','classteacher_controller@sublogin');
Route::get('/subteacher/logout',['as'=>'subteacherlogout','uses'=>'classteacher_controller@subteacherlogout']);
Route::get('subteacher/index','markentry_controller@subteacherindex');
Route::get('/subteacher/marksentry','markentry_controller@marksentry');
Route::get('/subteacher/terms/{class}/{subject}',['as'=>'marksadd','uses'=>'markentry_controller@terms']);
Route::get('/subteacher/firstterms/{class}/{subject}',['as'=>'firstterms','uses'=>'markentry_controller@firstterm']);
Route::get('/subteacher/secondterms/{class}/{subject}',['as'=>'secondterms','uses'=>'markentry_controller@secondterm']);
Route::get('/subteacher/anual/{class}/{subject}',['as'=>'anual','uses'=>'markentry_controller@anual']);

Route::post('/subteacher/firstterm/submit',['as'=>'submitmarks','uses'=>'markentry_controller@submitmarksfirstterm']);
Route::post('/subteacher/secondterm/submit',['as'=>'submitmarks','uses'=>'markentry_controller@submitmarkssecondterm']);
Route::post('/subteacher/anual/submit',['as'=>'submitmarks','uses'=>'markentry_controller@submitmarksanual']);

/*Route::get('/subteacher/submit','markentry_controller@submit');*/
Route::any('/subteacher/{query}',
	function(){ return redirect('/subteacher/login');})
    ->where('query','.*');
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
Route::auth();

Route::get('/studentlist',['as'=>'studentinfo','uses'=>'studentlist_controller@studentList']);
Route::get('/addstudent',['as'=>'addstudent','uses'=>'studentlist_controller@addstudent']);
Route::POST('/studentstore',['as'=>'studentstore','uses'=>'studentlist_controller@store']);
Route::get('/editStudent','studentlist_controller@editstudent');
Route::get('/','studentlist_controller@index');
Route::get('/editstudentinfo/{id}', ['as' =>'editstudentData', 'uses' =>'studentlist_controller@edit']);
Route::get('/studentdelete/{id}',['as'=>'studentdelete','uses'=>'studentlist_controller@delete']);
Route::POST('/updatestudentinfo', ['as' => 'updatestudentdata', 'uses' => 'studentlist_controller@update']);


Route::get('/teacherlist',['as'=>'teacherinfo','uses'=>'teachers_controller@teacherList']);
Route::get('/addteacher',['as'=>'addteacher','uses'=>'teachers_controller@addteacher']);
Route::POST('/teacherstore',['as'=>'teacherstore','uses'=>'teachers_controller@store']);
Route::get('/teacherdelete/{id}',['as'=>'teacherdelete','uses'=>'teachers_controller@delete']);
Route::get('/editTeacher','teachers_controller@editteacher');
Route::get('/editteacherinfo/{id}', ['as' => 'editteacherdata', 'uses' => 'teachers_controller@edit']);
Route::POST('/updateteacherinfo', ['as' => 'updateteacherdata', 'uses' => 'teachers_controller@update']);


Route::get('login',function(){

 return view('admins.login');
});

 
Route::get('classteacherinfo','classteacher_controller@classteacherinfo');
Route::get('addclassteacher','classteacher_controller@addclassteacher');
Route::get('editclassteacher','classteacher_controller@editclassteacher');
Route::get('/classteacherdelete/{id}',['as'=>'classteacherdelete','uses'=>'classteacher_controller@delete']);
Route::get('/classteacherlist',['as'=>'classteacherinfo','uses'=>'classteacher_controller@classteacherList']);
Route::POST('/classteacherstore',['as'=>'classteacherstore','uses'=>'classteacher_controller@store']);
Route::get('/editclassteacherinfo/{id}', ['as' => 'editclassteacherdata', 'uses' => 'classteacher_controller@edit']);
Route::POST('/updateclassteacherinfo', ['as' => 'updateclassteacherdata', 'uses' => 'classteacher_controller@update']);
Route::get('/classteacher/login','classteacher_controller@loginPage');
Route::post('/classteacher/afterlogin','classteacher_controller@login');


Route::get('viewresult',function(){
	return view('admins.viewresult');
});


Route::get('classteacherindex','classstudent_controller@teacherindex');
Route::get('student','classstudent_controller@student');
Route::get('addclassstudent','classstudent_controller@addstudent');
Route::get('editclassstudent','classstudent_controller@editstudent');
Route::get('/sutdentfivelist',['as'=>'student','uses'=>'classstudent_controller@classstudentList']);
Route::POST('/classstudentstore',['as'=>'classstudentstore','uses'=>'classstudent_controller@store']);
Route::get('/delete/{id}',['as'=>'delete','uses'=>'classstudent_controller@delete']);
Route::get('/editstudentinfo/five/{id}', ['as' => 'editclassstudentdata', 'uses' => 'classstudent_controller@edit']);
Route::POST('/updatestudentinfo/five', ['as' => 'updatestudentdata', 'uses' => 'classstudent_controller@update']);


//Route::get('classteacherindex','teacherfive_controller@teacherindex');
Route::get('/subteacher',['as'=>'subteacher','uses'=>'subteacher_controller@teacher']);
Route::get('/addsubteacher','subteacher_controller@addteacher');
Route::POST('/subteacherstore',['as'=>'subteacherstore','uses'=>'subteacher_controller@store']);
Route::get('/subteacherdelete/{id}',['as'=>'subteacherdelete','uses'=>'subteacher_controller@delete']);
Route::get('editsubteacher','subteacher_controller@editteacher');
Route::get('/editsubteacherinfo/{id}', ['as' => 'editsubteacherdata', 'uses' => 'subteacher_controller@edit']);
Route::POST('/updatesubteacherinfo', ['as' => 'updatesubteacherdata', 'uses' => 'subteacher_controller@update']);



Route::get('mark','marksheet_controller@marks');
Route::get('marksheet','marksheet_controller@marksheet');

/*Route::get('mark',function(){
    return view('classteacher.mark');
});

Route::get('marksheet',function(){
	return view('classteacher.marksheet');
});
*/


Route::auth();

Route::get('/',['as'=>'dashboard','uses'=>'HomeController@index']);
Route::get('/home',['as'=>'login','uses'=>'HomeController@login']);


/*Route::any('{query}',
	function(){ return redirect('/');})
    ->where('query','.*');
*/