  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
 @extends('layouts.adminLayout')



@section ('admin-content')


<br>
 <br>
        
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Add Student Information</h3>
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
             {!!Form::open(['action'=>'studentlist_controller@store'])!!}
                <div class="row">

                 
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="Full Name" required="required">
                    </div>
                  </div>
                    <div class="col-xs-6 col-sm-12 col-md-6">
                    <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="class" id="first_name" class="form-control input-sm" placeholder="class" required="required">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Roll</label>
                      <input type="text" name="roll" id="first_name" class="form-control input-sm" placeholder="roll" required="required">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Father's Name</label>
                      <input type="text" name="fname" id="fname" class="form-control input-sm" placeholder="Fathers Name" required="required">
                    </div>
                  </div>
                
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Mother's Name</label>
                      <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Mothers Name" required="required">
                    </div>
                  </div>
                


                    
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Gender</label>
                      <!-- <input type="text" name="gender" id="first_name" class="form-control input-sm" placeholder="Gender"> -->
                      <select class="form-control">
                      <option value="">-----select----</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Date Of Birth</label>
                      <input type="text" name="dob" id="datepicker" class="form-control input-sm" placeholder="Birth_date" required="required">
                    </div>
                  </div>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Contact</label>
                      <input type="text" name="contact" id="first_name" class="form-control input-sm" placeholder="contact" required="required">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control " name="address" required="required"> </textarea>
                    </div>
                  
                  </div>
                </div>
                <button class="btn btn-info">submit</button>
              
              {!!Form::close()!!}
            @endsection  