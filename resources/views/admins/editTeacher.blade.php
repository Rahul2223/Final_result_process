@extends('layouts.adminLayout')



@section ('admin-content')

<br>
       <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Teacher Information</h3>
            </div>
            <div class="panel-body">
            {!!Form::open(['action'=>'teachers_controller@update'])!!}
              <form role="form">
                <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    
                      <input type="hidden" name="id" id="first_name" class="form-control input-sm" placeholder="Full Name" value="{{$teacherid->id}}">
                    </div>
                  </div>
                 

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="Full Name"  value="{{$teacherid->name}}">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Father's Name</label>
                      <input type="text" name="fname" id="fname" class="form-control input-sm" placeholder="Fathers Name" value="{{$teacherid->fathers_name}}">
                    </div>
                  </div>
                <!-- </div> -->
                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 <label>Mother's Name</label>
                  <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Mothers name" value="{{$teacherid->mothers_name}}">
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                 <label>Applying Subject</label>
                  <input type="text" name="subject" id="mname" class="form-control input-sm" placeholder="Applying Subject" value="{{$teacherid->subject}}">
                </div>
                 </div>
                
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Contact</label>
                      <input type="text" name="contact" id="first_name" class="form-control input-sm" placeholder="contact" value="{{$teacherid->contact}}">
                    </div>
                  </div>
                    

                     <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control " name="address" >{{$teacherid->address}}   </textarea>
                    </div>
                  
                  </div>
                </div>
                  
                
                <button class="btn btn-info">Update</button>              
              {!!Form::close()!!}            

@endsection