<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subteacher;
use Session;
use App\Classstudent;
use App\Firstterm;
use  App\Secondterm;
use App\Anual;

class markentry_controller extends Controller
{
    public function subteacherindex()
    {  $subteachername=Session::get('name');
    //var_dump($subteachername);
    if(empty($subteachername)){

            return redirect('/subteacher/login');
        }
        else{

    	return view('subteacher.subteacherindex');
    }
        
    }
    public function marksentry()
    {
    	$name=Session::get('name');
        $year=date('Y');
        $data=Subteacher::where('name','=',$name)->where('year','=',$year)->get();
        //var_dump($data);
        if(empty($name)){

            return redirect('/subteacher/login');
        }
        else{
            
            foreach ($data as  $value) {
            $class=$value->class;
            $subject=$value->subject;
            

        return view('subteacher.marksentry')->with('data',$data);

         }
        
    }
    }
    
    public function terms(Request $request)
    {    
        $teacherclass=$request->class;
        $teachersubject=$request->subject;
        Session::set('teacherclass',$teacherclass);
        
        
        $subteachername=Session::get('name');
       
        $year=date('Y');
        $data=Classstudent::where('class',$teacherclass)->get();
        $datafirst=Firstterm::where('class',$teacherclass)->where($teachersubject,$teachersubject)->get();
        $datasecond=Secondterm::where('class',$teacherclass)->where($teachersubject,$teachersubject)->get();
       
         $anual=Anual::where('class',$teacherclass)->where($teachersubject,$teachersubject)->get();
         
        

        if(empty($subteachername)){

            return redirect('/subteacher/login');
        }
        else{
        return view('subteacher.terms')->with('data',$data)->with('datafirst',$datafirst)->with('datasecond',$datasecond)->with('anual',$anual)->with('subject',$teachersubject);

    }

    
    }
      public function firstterm($class,$subject)
      {
         $subteachername=Session::get('name');
         $year=date('Y');
       
          //var_dump($class);
         
         
        
      $firsttermdata=Firstterm::where('class',$class)->where('year',$year)->get();
      return view('subteacher.submitfirst')->with('firsttermdata',$firsttermdata)->with('class',$class)->with('subject',$subject);
         
       
       }
      public function secondterm($class,$subject)
      {
          $subteachername=Session::get('name');
         $year=date('Y');
       
          //var_dump($class);
         
         
        
      $secondtermdata=Secondterm::where('class',$class)->where('year',$year)->get();
      return view('subteacher.submitsecond')->with('secondtermdata',$secondtermdata)->with('class',$class)->with('subject',$subject);

       }
      public function anual($class,$subject)
      {
          $subteachername=Session::get('name');
         $year=date('Y');
       
          //var_dump($class);
         
         
        
      $anualdata=Anual::where('class',$class)->where('year',$year)->get();
      return view('subteacher.submitanual')->with('anualdata',$anualdata)->with('class',$class)->with('subject',$subject);
        
      }
    public function submitmarksfirstterm(Request $request)
    {
         
         
        $data=$request->all();
        $name=$request->get('name');
        $roll=$request->get('roll');
        $marks=$request->get('marks');
        $year=$request->get('year');
        $class=$request->get('class');
        $subject=$request->get('subject');
        //var_dump($subject);
         $numbersofroll= count($roll);
         

       
        
for($i=0;$i<$numbersofroll;$i++){
       $submitdata = array(

            'name' => $name[$i],
             'roll'=>$roll[$i] ,
             'marks'=>$marks[$i],
             'year'=>$year[$i],
             'class'=>$class[$i],
             'subject'=>$subject[$i],
             );

       $classname=$name[$i];
       $classroll=$roll[$i];
       $subjectmarks=$marks[$i];
       $subjectadd=$subject[$i];
       $classadd=$class[$i];
       $y=date('Y');

          //var_dump($classname,$classroll,$subjectmarks);
    
    Firstterm::where('name', $classname)->where('roll',$classroll)->where('year',$y)->update(array($subjectadd => $subjectmarks));
   
 
    
    }

           
     return redirect('/subteacher/marksentry')->with('message',"Number added successfully of subject $subjectadd of class $classadd");     


  
  
}
public function submitmarkssecondterm(Request $request)
    {
         
         
        $data=$request->all();
        $name=$request->get('name');
        $roll=$request->get('roll');
        $marks=$request->get('marks');
        $year=$request->get('year');
        $class=$request->get('class');
        $subject=$request->get('subject');
        //var_dump($subject);
         $numbersofroll= count($roll);
         

       
        
for($i=0;$i<$numbersofroll;$i++){
       $submitdata = array(

            'name' => $name[$i],
             'roll'=>$roll[$i] ,
             'marks'=>$marks[$i],
             'year'=>$year[$i],
             'class'=>$class[$i],
             'subject'=>$subject[$i],
             );

       $classname=$name[$i];
       $classroll=$roll[$i];
       $subjectmarks=$marks[$i];
       $subjectadd=$subject[$i];
       $classadd=$class[$i];
       $y=date('Y');

          //var_dump($classname,$classroll,$subjectmarks);
    
    Secondterm::where('name', $classname)->where('roll',$classroll)->where('year',$y)->update(array($subjectadd => $subjectmarks));
   
 
    
    }

           
     return redirect('/subteacher/marksentry')->with('message',"Number added successfully of subject $subjectadd of class $classadd");     


  
  
}
public function submitmarksanual(Request $request)
    {
         
         
        $data=$request->all();
        $name=$request->get('name');
        $roll=$request->get('roll');
        $marks=$request->get('marks');
        $year=$request->get('year');
        $class=$request->get('class');
        $subject=$request->get('subject');
        //var_dump($subject);
         $numbersofroll= count($roll);
         

       
        
for($i=0;$i<$numbersofroll;$i++){
       $submitdata = array(

            'name' => $name[$i],
             'roll'=>$roll[$i] ,
             'marks'=>$marks[$i],
             'year'=>$year[$i],
             'class'=>$class[$i],
             'subject'=>$subject[$i],
             );

       $classname=$name[$i];
       $classroll=$roll[$i];
       $subjectmarks=$marks[$i];
       $subjectadd=$subject[$i];
       $classadd=$class[$i];
       $y=date('Y');

          //var_dump($classname,$classroll,$subjectmarks);
    
    Anual::where('name', $classname)->where('roll',$classroll)->where('year',$y)->update(array($subjectadd => $subjectmarks));
   
 
    
    }

           
     return redirect('/subteacher/marksentry')->with('message',"Number added successfully of subject $subjectadd of class $classadd");     


  
  
}
}
