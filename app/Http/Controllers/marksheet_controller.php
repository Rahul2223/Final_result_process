<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class marksheet_controller extends Controller
{
    public function marks()
    {
    	return view('classteacher.mark');
    }
    public function marksheet()
    {
    	return view('classteacher.marksheet');
    }
}
