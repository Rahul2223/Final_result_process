 @extends('layouts.classteacherLayout')



@section ('classteacher-content')

<br>
        <!-- <div class="container">
        <div class="row centered-form"> -->
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Update Student Information</h3>
            </div>
            <div class="panel-body">
            {!!Form::open(['action'=>'classstudent_controller@update'])!!}
              <form role="form">
                <div class="row">

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                     
                      <input type="hidden" name="id" id="" class="form-control input-sm" placeholder="Id_num" value="{{$studentid->id}}">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <label>Year</label>
                    <input type="text" name="year" id="year" class="form-control input-sm" placeholder="year" value="{{$studentid->year}}" readonly="readonly">
                    </div>
                  </div>
                 
                  <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <label>Roll</label>
                    <input type="text" name="roll" id="class_roll" class="form-control input-sm" placeholder="roll" value="{{$studentid->roll}}">
                    </div>
                  </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                  <label>Name</label>
                   <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="name" value="{{$studentid->name}}">
                    </div>
                  </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <label>Contact</label>
                  <input type="text" name="contact" id="first_name" class="form-control input-sm" placeholder="contact" value="{{$studentid->contact}}">
                    </div>
                  </div>
                  
                </div>



                
                  
                
                 <button class="btn btn-info">Update</button>
              
              {!!Form::close()!!} 



 @endsection  