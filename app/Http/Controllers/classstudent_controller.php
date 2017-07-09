<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classstudent;
use DB;
use Illuminate\support\Facades\Input;
use Redirect;
use Session;
use App\Firstterm;
use App\Secondterm;
use App\Anual;

class classstudent_controller extends Controller
{
    
    public function classstudentList()
    {
        $class=Session::get('class');
        $year=date("Y");
       // var_dump($year);

        $studentlist=Classstudent::where('class',$class)->where('year',$year)->get();
        
    return view('classteacher.student')->with('studentlist',$studentlist);
    }

    public function teacherindex()
    {
    	return view('classteacher.classteacherindex'); 
    }
    public function student()
    {
         $class=Session::get('class');
         $year=date("Y");
       // var_dump($year);


        $classstudentlist=Classstudent::where('class',$class)->where('year',$year)->get();
        
    return view('classteacher.student')->with('classstudentlist',$classstudentlist);
    	//return view('classteacher.student');
    }
    public function addstudent()
    {
        return view('classteacher.addclassstudent');
    }
    public function editstudent()
    {
        return view('classteacher.editclassstudent');
    }
    
      public function store(Request $request)
   {

     $this->validate($request,[
        'year'=>'required',
        'roll'=>'required',
        'fullname'=>'required',
        'contact'=>'required',
        'class'=>'required',
             ]);

      $studentinfo=new Classstudent;
       $studentinfo->class=$request->class;
      $studentinfo->year=$request->year;
      $studentinfo->roll=$request->roll;
      $studentinfo->name=$request->fullname;
      $studentinfo->contact=$request->contact;
      $studentinfo->save();

      Firstterm::insert(
              array(
                      'name'=>$request->fullname,
                      'class'=>$request->class,
                      'roll'=>$request->roll,
                      'year'=>$request->year,
                      'marks'=>'',


                )
            
        );
      Secondterm::insert(
              array(
                      'name'=>$request->fullname,
                      'class'=>$request->class,
                      'roll'=>$request->roll,
                      'year'=>$request->year,
                      'marks'=>'',


                )
            
        );
      
      Anual::insert(
              array(
                      'name'=>$request->fullname,
                      'class'=>$request->class,
                      'roll'=>$request->roll,
                      'year'=>$request->year,
                      'marks'=>'',


                )
            
        );
      
      


     return redirect('/student')->with('message', 'Studentinfo add successfully');
     
    }
    
     public function delete($id)
    {
     $studentid=Classstudent::findOrfail($id);
     $studentid->delete();
     return redirect('/student');
    } 


     public function edit($id)    
    {
      $studentid=Classstudent::findOrFail($id);
      return view('classteacher.editclassstudent')->with('studentid',$studentid);
    }

    public function update(Request $request)
    {
         $ID=$request->id;
         $updatestudentlist=$request->all();
         $updatedstudentlist=Classstudent::where('id','=',$ID)->update(array('roll'=>$request->roll,'year'=>$request->year,'name'=>$request->fullname,'contact'=>$request->contact));
        return redirect('/student');

    }

}
