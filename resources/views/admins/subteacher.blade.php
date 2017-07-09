@extends('layouts.adminLayout')



@section ('admin-content')

     <br>
  
  
  
     <div class="col-md-12">
        <a class="btn btn-primary" href="{{url('addsubteacher')}}" role="button" >Add Teacher</a>
        </div>

           
         </div>

   <br> 
   <div style="border-bottom:1px solid #ccc; padding: 2px; margin-bottom: 10px;">
      <!-- <h2>Subject Teacher of Class  </h2> -->
      </div>
  <table class="table table-bordered" style="background: #fff;">
    
    <thead>
      <tr>
         <th>ID</th>
         <th>Year</th>
         <th>Teacher Name</th>
         <th>Subject</th>
         <th>Class</th>
         <th width="200" >Option</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($subteacherlist as $teacherinfo)
    <tr>
    <td>{{$teacherinfo->id}}</td>
    <td>{{$teacherinfo->year}}</td>
    <td>{{$teacherinfo->name}}</td>
    <td>{{$teacherinfo->subject}}</td>
    <td>{{$teacherinfo->class}}</td>
    <td>
      <a class="btn btn-primary" href="{{route('editsubteacherdata',$teacherinfo->id)}}" role="button">Edit</a>
      <a class="btn btn-primary" href="{{route('subteacherdelete',$teacherinfo->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" role="button">Delete</a>
    </td>
    </tr>
    @endforeach
   </tbody>
    
  </table>

@endsection