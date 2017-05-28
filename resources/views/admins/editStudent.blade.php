@extends('layouts.adminLayout')



@section ('admin-content')



<br>
                
                   <div class=" col-md-3"></div><div class="col-md-6 ">
                          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Edit Student Information</h3>
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
                    <div class="col-xs-6 col-sm-12 col-md-6">
                    <div class="form-group">
                    <label>Class</label>
                      <input type="text" name="class" id="first_name" class="form-control input-sm" placeholder="class">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Roll</label>
                      <input type="text" name="roll" id="first_name" class="form-control input-sm" placeholder="roll">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Father's Name</label>
                      <input type="text" name="fname" id="fname" class="form-control input-sm" placeholder="Fathers Name">
                    </div>
                  </div>
                
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Mother's Name</label>
                      <input type="text" name="mname" id="mname" class="form-control input-sm" placeholder="Mothers Name">
                    </div>
                  </div>
                


                    
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Gender</label>
                      <input type="text" name="gender" id="first_name" class="form-control input-sm" placeholder="Gender">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                    <label>Date Of Birth</label>
                      <input type="text" name="dob" id="first_name" class="form-control input-sm" placeholder="Birth_date">
                    </div>
                  </div>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <label>Contact</label>
                      <input type="text" name="contact" id="first_name" class="form-control input-sm" placeholder="contact">
                    </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control " name="address"> </textarea>
                    </div>
                  
                  </div>
                </div>
                
                <a class="btn btn-primary" style="margin-left: 200px;" href="{{('studentInfo')}}" role="button">Submit</a>
              
              </form>
              @endsection