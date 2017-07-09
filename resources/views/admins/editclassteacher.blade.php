@extends('layouts.adminLayout')



@section ('admin-content')
<br>
        <!-- <div class="container">
        <div class="row centered-form"> -->
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Classteacher Information</h3>
            </div>
            <div class="panel-body">
            {!!Form::open(['action'=>'classteacher_controller@update'])!!}
              <form role="form">
                <div class="row">
                 
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    
                      <input type="hidden" name="id" id="" class="form-control input-sm" placeholder="Id_num" value="{{$classteacherid->id}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <label>Year</label>
                    <input type="text" name="year" id="year" class="form-control input-sm" placeholder="year" value="{{$classteacherid->year}}" readonly="readonly">
                    </div>
                  </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full Name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="name" value="{{$classteacherid->name}}">
                    </div>
                  </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="class" id="first_name" class="form-control input-sm" placeholder="class_no" value="{{$classteacherid->class}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Subject</label>
                      <input type="text" name="subject" id="first_name" class="form-control input-sm" placeholder="subject" value="{{$classteacherid->subject}}">
                    </div>
                  </div>
                  
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Mobile</label>
                      <input type="text" name="mobileno" id="mobileno" class="form-control input-sm" placeholder="Mobile Number" value="{{$classteacherid->mobileno}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Password</label>
                      <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password" value="{{$classteacherid->password}}">
                    </div>
                  </div>

                </div>



                
                  
                
                <button class="btn btn-info">Update</button>
              
              {!!Form::close()!!} 


@endsection 