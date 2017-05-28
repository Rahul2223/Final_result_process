 @extends('layouts.adminLayout')



@section ('admin-content')

      <br>
        <div class=" col-md-3"></div><div class="col-md-6 ">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"> Teacher Information</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                 
                 
                  

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Full name</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="Full Name">
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Father's Name</label>
                      <input type="text" name="fname" id="fname" class="form-control input-sm" placeholder="Fathers Name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                 <label>Mother's Name</label>
                  <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Mothers name">
                </div>

                <div class="form-group">
                 <label>Applying Subject</label>
                  <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Applying Subject">
                </div>
                 
                 <div class="form-group">
                      <!-- <input type="" name="password" id="password" class="form-control input-sm" placeholder="Password"> -->
                      <label>Educational Qualification</label>
                      <textarea class="form-control "> </textarea>
                    </div>
                    <div class="form-group">
                      <!-- <input type="" name="password" id="password" class="form-control input-sm" placeholder="Password"> -->
                      <label>Address</label>
                      <textarea class="form-control "> </textarea>
                    </div>
                  
                
                <a class="btn btn-primary" href="{{('teacherInfo')}}" role="button">Add</a>              
              </form>
            

@endsection