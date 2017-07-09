

@extends('layouts.adminLayout')



@section ('admin-content')

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
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
        <th>Password</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
   
@foreach ($teacherlist as $teacherinfo)

<tr>
  <td>{{$teacherinfo->id}}</td>
  <td>{{$teacherinfo->name}}</td>
  <td>{{$teacherinfo->fathers_name}}</td>
  <td>{{$teacherinfo->mothers_name}}</td>
  <td>{{$teacherinfo->subject}}</td>
  <td>{{$teacherinfo->contact}}</td>
  <td>{{$teacherinfo->address}}</td>
  <td>{{$teacherinfo->password}}</td>
  <td><a class="btn btn-primary" href="{{route('editteacherdata',$teacherinfo->id)}}" role="button"> Edit</a> <a class="btn btn-primary" href="{{route('teacherdelete',$teacherinfo->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"  role="button">Delete</a> </td>
</tr>
@endforeach
    </tbody>
    </table>
@endsection