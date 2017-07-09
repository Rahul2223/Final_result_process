<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subteacher;
use DB;
use Illuminate\support\Facades\Input;
use Redirect;

class subteacher_controller extends Controller
{
    /*public function teacherindex()
    {
    	return view('admins.subteacher'); 
    }*/
    
    public function teacher()
    {
    	 $subteacherlist=Subteacher::all();
        
    return view('admins.subteacher')->with('subteacherlist',$subteacherlist);
        
    }

    public function addteacher()
    {
        return view('admins.addsubteacher');
    }
    public function editteacher()
    {
      return view('admins.editsubteacher');
    }

        public function store(Request $request)
   {

     $this->validate($request,[
        'year'=>'required',
        'fullname'=>'required',
        'subject'=>'required',
        'class'=>'required',
        ]);

      $teacherinfo=new Subteacher;
      
      $teacherinfo->year=$request->year;
      $teacherinfo->name=$request->fullname;
      $teacherinfo->subject=$request->subject;
      $teacherinfo->class=$request->class;
      
      $teacherinfo->save();
     return redirect('/subteacher')->with('message', 'teacherinfo add successfully');
    }

    public function delete($id)
    {
     $teacherid=Subteacher::findOrfail($id);
     $teacherid->delete();
     return redirect('/subteacher');
    }

    public function edit($id)    
    {
      $teacherid=Subteacher::findOrFail($id);
      return view('admins.editsubteacher')->with('teacherid',$teacherid);
    } 

    public function update(Request $request)
    {
         $ID=$request->id;
         $updatesubteacherlist=$request->all();
         $updatedsubteacherlist=Subteacher::where('id','=',$ID)->update(array('year'=>$request->year,'name'=>$request->fullname,'subject'=>$request->subject,'class'=>$request->class));
        return redirect('/subteacher');

    }

}
