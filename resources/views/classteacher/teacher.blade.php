@extends('layouts.classteacherLayout')


@section ('classteacher-content')


     <br>
  
  
  
     <div class="col-md-12">
        <a class="btn btn-primary" href="{{url('addteacherfive')}}" role="button" >Add Teacher</a>
        </div>

           
         </div>

   <br> 
   <div style="border-bottom:1px solid #ccc; padding: 2px; margin-bottom: 10px;">
      <h2>Subject Teacher of Class Five </h2>
      </div>
  <table class="table table-bordered" style="background: #fff;">
    
    <thead>
      <tr>
         <th>ID</th>
         <th>Teacher Name</th>
         <th>Subject</th>
         <th>Contact</th>
         <th width="200" >Option</th>
      </tr>
    </thead>
    
    <tbody>
    @foreach($teacherfivelist as $teacherinfo)
    <tr>
    <td>{{$teacherinfo->id}}</td>
    <td>{{$teacherinfo->name}}</td>
    <td>{{$teacherinfo->subject}}</td>
    <td>{{$teacherinfo->contact}}</td>
    <td>
      <a class="btn btn-primary" href="{{route('editteacherfivedata',$teacherinfo->id)}}" role="button">Edit</a>
      <a class="btn btn-primary" href="{{route('delete',$teacherinfo->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" role="button">Delete</a>
    </td>
    </tr>
    @endforeach
   </tbody>
    
  </table>

@endsection