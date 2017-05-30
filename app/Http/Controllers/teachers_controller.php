<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Teacherinfo;
use DB;
use Illuminate\support\Facades\Input;
use Redirect;

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

/*  $input1=$request->all();
 Teacherinfo::create($input1);
*/
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
public function edit($id)
{
    $teacherid=Teacherinfo::findOrFail($id);
     return view('admins.editTeacher')->with('teacherid',$teacherid);
}

public function update(Request $request)
{
   $update=$request->all();
   $ID=$request->id;

   $updated=Teacherinfo::where('id','=',$ID)->update(array('name'=>$request->fullname,'fathers_name'=>$request->fname,'mothers_name'=>$request->mname,'subject'=>$request->subject,'contact'=>$request->contact,'address'=>$request->address));
   
   return redirect('/teacherlist');
}
}



 
 
