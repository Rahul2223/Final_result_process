@extends('layouts.adminLayout')



@section ('admin-content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

<br>
          <div class="col-md-12">

        <a class="btn btn-primary" href="{{url('addclassteacher')}}" role="button" >Add Class Teacher</a>
        </div>
           
         </div>

   <br>
  <table class="table table-bordered" style="background: #fff;">
    <thead>
      <tr>
        <th>Id</th>
        <th>Year</th>
        <th>Full Name</th>
        <th>Class</th>
        <th>Subject</th>
        <th>Mobileno</th>
        <th>Password</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ctl as $cti)
      <tr>
        <td>{{$cti->id}}</td>
        <td>{{$cti->year}}</td>
        <td>{{$cti->name}}</td>
        <td>{{$cti->class}}</td>
        <td>{{$cti->subject}}</td>
        <td>{{$cti->mobileno}}</td>
        <td>{{$cti->password}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('editclassteacherdata',$cti->id)}}" role="button">Edit</a>
          <a class="btn btn-primary" href="{{route('classteacherdelete',$cti->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" role="button">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection