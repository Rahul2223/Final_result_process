@extends('layouts.adminLayout')



@section ('admin-content')
<br>
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Update Teacher Information</h3>
            </div>
            <div class="panel-body">
            {!!Form::open(['action'=>'subteacher_controller@update'])!!}
              <form role="form">
                <div class="row">
                 
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <!-- <label>ID</label> -->
                      <input type="hidden" name="id" id="" class="form-control input-sm" placeholder="Id_num" value="{{$teacherid->id}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <label>Year</label>
                    <input type="text" name="year" id="year" class="form-control input-sm" placeholder="year" value="{{$teacherid->year}}" readonly="readonly">
                    </div>
                  </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full Name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="name" value="{{$teacherid->name}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Subject</label>
                      <input type="text" name="subject" id="first_name" class="form-control input-sm" placeholder="subject" value="{{$teacherid->subject}}">
                    </div>
                  </div> 

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="class" id="first_name" class="form-control input-sm" placeholder="class" value="{{$teacherid->class}}">
                    </div>
                  </div> 
                                   
                </div>
                
                <button class="btn btn-info">Update</button>
              
              {!!Form::close()!!} 



@endsection