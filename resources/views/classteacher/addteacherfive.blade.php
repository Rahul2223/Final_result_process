 @extends('layouts.classteacherLayout')



@section ('classteacher-content')


<br>
        <!-- <div class="container">
        <div class="row centered-form"> -->
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Add Teacher Information</h3>
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
            {!!Form::open(['action'=>'teacherfive_controller@store'])!!}
              <form role="form">
                <div class="row">

                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full Name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="name">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Subject</label>
                      <input type="text" name="subject" id="first_name" class="form-control input-sm" placeholder="subject">
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