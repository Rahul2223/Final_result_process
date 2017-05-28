<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Studentinfo;
use DB;

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
public function store(Request $request)
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

$studentinfo=new Studentinfo;

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
return redirect('/studentlist')->withSuccess('Studentinfo add successfully');

}
}
