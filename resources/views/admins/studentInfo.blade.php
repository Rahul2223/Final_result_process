@extends('layouts.adminLayout')



@section ('admin-content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
            <br>
                 <div class="col-md-6">
                 <a class="btn btn-primary" href="{{route('addstudent')}}" role="button" >Add Student</a>
          </div>


        <!-- <div class="col-md-3">

          <label>Previous year student Info</label>
        </div>
          <div class="col-md-3">
            <select class="form-control">
              <option>2010</option>s
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>


            </select>

         </div> -->

         <div class="style"></div>
     </div>
     <div class="style"></div>
     <br>
     
  <table class="table table-bordered" >
  <div class="table-responsive">

   <div class="col-md-3">
                     
            
    <thead>
      <tr>
         <th>Id</th>
         
        <th>Full Name</th>
        <th>Class</th>
        <th>Roll</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
  

@foreach ($studentlist as $studentinfo)
<tr>
<td>{{$studentinfo->id}}</td>
<td>{{$studentinfo->name}}</td>
  <td>{{$studentinfo->class}}</td>
  <td>{{$studentinfo->roll}}</td>
  <td>{{$studentinfo->fathers_name}}</td>
  <td>{{$studentinfo->mothers_name}}</td>
  <td>{{$studentinfo->gender}}</td>
  <td>{{$studentinfo->dob}}</td>
  <td>{{$studentinfo->address}}</td>
  <td>{{$studentinfo->contact}}</td>
  <td><a class="btn btn-primary" href="{{route('editstudentData',$studentinfo->id)}}" role="button"> Edit</a> <a class="btn btn-primary" href="{{route('studentdelete',$studentinfo->id)}} " onclick="return confirm('Are you sure you want to delete this item?');"  role="button">Delete</a> </td>

</tr>



@endforeach
    </tbody>
    
  </table>

@endsection