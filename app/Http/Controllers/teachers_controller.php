<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teacherinfo;
use DB;

class teachers_controller extends Controller
{
    
    public function teacherList()
{

	$teacherlist=Teacherinfo::all();


	
	return view('admins.teacherInfo')->with('teacherlist',$teacherlist);
}




public function addteacher()
{
	 
	 return view('admins.addTeacher');
}
public function editteacher()
{
	return view('admins.editTeacher');
}
public function store(Request $request)
{

 $this->validate($request,[
        'fullname'=>'required',
        'fname'=>'required',
        'mname'=>'required',
        'subject'=>'required',
       
        'contact'=>'required',
        'address'=>'required',

    ]);

$teacherinfo=new Teacherinfo;

$teacherinfo->name=$request->fullname;
$teacherinfo->fathers_name=$request->fname;
$teacherinfo->mothers_name=$request->mname;
$teacherinfo->subject=$request->subject;
$teacherinfo->contact=$request->contact;
$teacherinfo->address=$request->address;
$teacherinfo->save();
return redirect('/teacherlist')->withSuccess('teacherinfo add successfully');

}
}



 
 
