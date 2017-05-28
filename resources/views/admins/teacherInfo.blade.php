@extends('layouts.adminLayout')



@section ('admin-content')

<br>
          <div class="col-md-12">

        <a class="btn btn-primary" href="{{route('addteacher')}}" role="button" >Add Teacher</a>
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
        
        <th>Contact</th>
        <th>Address</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
    <!-- <tr>
  <td>500067</td>
    <td>Md. Habib</td>
  <td>Md. Khalil</td>
  <td>Mst. Lima</td>
  <td>Math, Physics</td>
  <td>Masters in Math</td>
  <td>2312</td>
  <td>Shaheeb Bazar, Rajshahi</td>

  <td><a class="btn btn-primary" href="{{('editTeacher')}}" role="button">Edit</a> <a class="btn btn-primary" href="" role="button">Delete</a>  </td>



</tr> -->
@foreach ($teacherlist as $teacherinfo)

<tr>
<td>{{$teacherinfo->id}}</td>
<td>{{$teacherinfo->name}}</td>
  
  <td>{{$teacherinfo->fathers_name}}</td>
  <td>{{$teacherinfo->mothers_name}}</td>
  <td>{{$teacherinfo->subject}}</td>
  <td>{{$teacherinfo->address}}</td>
  <td>{{$teacherinfo->contact}}</td>
  <td><a class="btn btn-primary" href="{{url('editStudent')}}" role="button"> Edit</a> <a class="btn btn-primary" href="" role="button">Delete</a> </td>

</tr>



@endforeach
    </tbody>
    
   
  </table>




@endsection