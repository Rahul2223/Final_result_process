@extends('layouts.adminLayout')



@section ('admin-content')



<br>
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Student Information</h3>
            </div>
            <div class="panel-body">
              <form role="form">
                <div class="row">
                 
                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Id</label>
                      <input type="text" name="class roll" id="class_roll" class="form-control input-sm" placeholder="Id_number">
                    </div>
                  </div>
                 
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="fullname" id="first_name" class="form-control input-sm" placeholder="class">
                    </div>
                  </div>

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
                 <label>Date of Birth</label>
                  <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Date of Birth">
                </div>

                
                    <div class="form-group">
                     
                      <label>Address</label>
                      <textarea class="form-control "> </textarea>
                    </div>
                  
                
                <a class="btn btn-primary" style="margin-left: 100px;" href="{{('studentInfo')}}" role="button">Submit</a>
              
              </form>
              @endsection