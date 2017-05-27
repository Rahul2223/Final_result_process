<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Studentinfo;
use DB;

class studentlist_controller extends Controller
{
    //


public function index()
{
	/*$studentinfos=$this->studentinfos;
	return view('admins.studentinfo',compact('studentinfos'));*/

	$studentinfos=Studentinfo::all();
/*	$studentlist=DB::table('studentlist')->get();*/
	/*var_dump($studentlist);*/
	return view('admins.studentInfo')->with('studentinfos',$studentinfos);
}

}
