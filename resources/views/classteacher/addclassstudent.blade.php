 @extends('layouts.classteacherLayout')



@section ('classteacher-content')

<br>
        <!-- <div class="container">
        <div class="row centered-form"> -->
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Add Student Information of Class <?php echo (Session::get('class'));?></h3>
            </div>
            @if (count($errors) > 0)
                 <div class="alert alert-danger">
                   <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                   </ul>
                 </div>
                @endif
            <div class="panel-body">
            {!!Form::open(['action'=>'classstudent_controller@store'])!!}
              <form role="form">
                
                      <input type="hidden" name="class" id="class" class="form-control input-sm" placeholder="roll" value="<?php echo (Session::get('class'));?>" >
                   
                 
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Year</label>
                      <input type="text" name="year" id="year" class="form-control input-sm" placeholder="year">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Roll</label>
                      <input type="text" name="roll" id="class_roll" class="form-control input-sm" placeholder="roll">
                    </div>
                  </div>

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="name">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Contact</label>
                      <input type="text" name="contact" id="first_name" class="form-control input-sm" placeholder="contact">
                    </div>
                  </div>
                  
                </div>
                <button class="btn btn-info">submit</button>         
              {!!Form::close()!!}

 @endsection  