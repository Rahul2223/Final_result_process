@extends('layouts.adminLayout')



@section ('admin-content')

<br>
          <div class="col-md-12">

        <a class="btn btn-primary" href="{{url('addTeacher')}}" role="button" >Add Teacher</a>
        </div>
           
         </div>

   <br>
  <table class="table table-bordered" style="background: #fff;">
    <thead>
      <tr>
         <td>Id</td>
        <th>Full Name</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Applying Subject</th>
        <th>Educational Qualification</th>
        <th>Address</th>
        <th>edit</th>
      </tr>
    </thead>
    <tbody>
    <tr>
  <td>500067</td>
    <td>Md. Habib</td>
  <td>Md. Khalil</td>
  <td>Mst. Lima</td>
  <td>Math, Physics</td>
  <td>Masters in Math</td>
  <td>Shaheeb Bazar, Rajshahi</td>

  <td><a class="btn btn-primary" href="{{('editTeacher')}}" role="button">Edit</a>  </td>



</tr>
    </tbody>
    
   
  </table>




@endsection