<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Classteacherinfo;
use DB;
use Illuminate\support\Facades\Input;
use Redirect; 
use App\classteacherlist;
use Session;
use App\Teacherinfo;
use Auth;

class classteacher_controller extends Controller
{
    public function classteacherList()
    {
        $classteacherlist=Classteacherinfo::all();
        
    return view('admins.classteacherinfo')->with('ctl',$classteacherlist);
    }
    public function classteacherinfo()
    {
    	$classteacherlist=Classteacherinfo::all();
        
    return view('admins.classteacherinfo')->with('ctl',$classteacherlist);
    }
    public function addclassteacher()
    {
    	return view('admins.addclassteacher');
    }
    public function editclassteacher()
    {
    	return view('admins.editclassteacher');
    }

    public function store(Request $request)
   {

     $this->validate($request,[
        'year'=>'required',
        'fullname'=>'required',
        
        'class'=>'required',
        'subject'=>'required',
        'mobileno'=>'required',
        'password'=>'required',
        
       
        
       ]);

      $classteacherinfo=new Classteacherinfo;
       $classteacherinfo->id=$request->id;
      $classteacherinfo->year=$request->year;
      $classteacherinfo->name=$request->fullname;
      $classteacherinfo->class=$request->class;
      $classteacherinfo->subject=$request->subject;
       $classteacherinfo->mobileno=$request->mobileno;
       $classteacherinfo->password=$request->password;
        

      $classteacherinfo->save();
      $ID=$classteacherinfo->id;


     return redirect('/classteacherlist')->with('message', 'teacherinfo add successfully');
    }
    
public function delete($id)
{
   $classteacherid=Classteacherinfo::findOrfail($id);
   $classteacherid->delete();
   return redirect('/classteacherlist');
} 

    public function edit($id)
{
    $classteacherid=Classteacherinfo::findOrFail($id);
     return view('admins.editclassteacher')->with('classteacherid',$classteacherid);
}
   
   public function update(Request $request)
{
   $ID=$request->id;
   //var_dump($ID);
   $updateclassteacherlist=$request->all();
   //var_dump($updateclassteacherlist);
   
   

   $updatedclassteacherlist=Classteacherinfo::where('id','=',$ID)->update(array('year'=>$request->year,'name'=>$request->fullname,'subject'=>$request->subject,'mobileno'=>$request->mobileno,'password'=>$request->password));
   var_dump($updatedclassteacherlist);
   
   return redirect('/classteacherlist');

}
public function loginPage(Request $request)
{
  return view('classteacher.login');

}
public function login(Request $request)
{
$this->validate($request,[
        'mobileno'=>'required',
        
        'password'=>'required',
        
       ]);
 $mobileno=$request->mobileno;
 $password=$request->password;
 $data=Classteacherinfo::where('mobileno','=',$mobileno)->where('password','=',$password)->get();
 foreach ($data as $value) {
   # code...
 $tablemobileno=$value->mobileno;
 $tablepassword=$value->password;
 $tableyear=$value->year;
 $year=date('Y');
 

    if ($tablemobileno==$mobileno && $tablepassword==$password && $tableyear==$year) {
      $class=$value->class;
    
      Session::set('class',$class );

  return redirect('/classteacherindex');
    }
    else if($tablemobileno!=$mobileno && $tablepassword==$password){
    print("teachers login unsuccessfull");
    }
}
}
public function subloginpage()
{
  return view('subteacher.login');
}
public function sublogin(Request $request){
  $mobileno=$request->mobileno;
 $password=$request->password;
 //var_dump($mobileno,$password);
 $subteacher=Teacherinfo::select('contact','password')->get();
 foreach ($subteacher as $value) {

 $contacttable=$value->contact;
 $passtable=$value->password;
 
  if($mobileno==$contacttable && $passtable==$password){

  $data=Teacherinfo::where('contact',$mobileno)->where('password',$password)->get();
  foreach ($data as $key ) {
  

 $name=$key->name;
 var_dump($name);
    $sessionname=Session::set('name',$name );

 return redirect('/subteacher/index')->with('message','Login Successful ');


 } 
}
  }


}
public function subteacherlogout(){

Session::flush();
return redirect('/subteacher/login')->with('message','Logout Successful');
   
}

}