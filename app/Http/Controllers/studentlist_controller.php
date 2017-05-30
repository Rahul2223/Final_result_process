<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Studentinfo;
use DB;
use Illuminate\support\Facades\Input;
use Redirect;

class studentlist_controller extends Controller
{
    //


public function studentList()
{
	
	$studentlist=Studentinfo::all();

	
	return view('admins.studentInfo')->with('studentlist',$studentlist);
}


public function index()
{
	return view('admins.index');
}


public function addstudent()
{
	 
	 return view('admins.addStudent');
}
public function editstudent()
{
	return view('admins.editStudent');
}
/*public function editstudent()
{
    return view('admins.studentInfo');
}
*/public function store(Request $request)
{

 $this->validate($request,[
        'fullname'=>'required',
        'class'=>'required',
        'roll'=>'required',
        'fname'=>'required',
        'mname'=>'required',
        'gender'=>'required',
        'dob'=>'required',
        'contact'=>'required',
        'address'=>'required',

    ]);
/* $input=$request->all();
 dd($input);
 Studentinfo::create($input);*/

$studentinfo=new Studentinfo;
$studentinfo->id=$request->id;


$studentinfo->name=$request->fullname;
$studentinfo->class=$request->class;
$studentinfo->roll=$request->roll;
$studentinfo->fathers_name=$request->fname;
$studentinfo->mothers_name=$request->mname;
$studentinfo->gender=$request->gender;
$studentinfo->dob=$request->dob;
$studentinfo->contact=$request->contact;
$studentinfo->address=$request->address;
$studentinfo->save();
$ID=$studentinfo->id;
return redirect('/studentlist')->withSuccess('Studentinfo add successfully');

}
/*
public function edit($id)
{
    $user=user::find($id);
    return view::make('user.update')->with('user',$user);
}
*/
public function edit($id)
{
    

    $studentid=Studentinfo::findOrfail($id);
    

    
   return view('admins.editStudent')->with('studentid',$studentid);
}
public function update(Request $request)
{
   $update=$request->all();
   $ID=$request->id;
   
   
   $updated=Studentinfo::where('id','=',$ID)->update(array('name'=>$request->fullname,'class'=>$request->class,'roll'=>$request->roll,'fathers_name'=>$request->fname,'mothers_name'=>$request->mname,'gender'=>$request->gender,'dob'=>$request->dob,'contact'=>$request->contact,'address'=>$request->address));
   
  
  return redirect ('/studentlist');
}
}
