@extends('layouts.classteacherLayout')


@section ('classteacher-content')


     
         <br>
        <div class="col-md-12">
          <a class="btn btn-primary" href="{{url('addclassstudent')}}" role="button" >Add Student</a>
        </div>

           
         </div>

   <br> 
       <div style="border-bottom:1px solid #ccc; padding: 2px; margin-bottom: 10px;">
         <h2>Student of Class <?php echo (Session::get('class'));?> - Year <?php echo date("Y"); ?></h2>
       </div>
      <table class="table table-bordered" style="background: #fff;">
    
    <thead>
      <tr>
         <td>ID</td>
         <th>Year</th>
         <td>Roll</td>
         <th>Full Name</th>
         <th>Contact</th>
         <th width="200" >Option</th>
      </tr>
    </thead>
    
    <tbody>
    
    @foreach($classstudentlist as $studentinfo)
      <tr>
        <td>{{$studentinfo->id}}</td>
        <td>{{$studentinfo->year}}</td>
        <td>{{$studentinfo->roll}}</td>
        <td>{{$studentinfo->name}}</td>
        <td>{{$studentinfo->contact}}</td>
        <td>
          <a class="btn btn-primary" href="{{route('editclassstudentdata',$studentinfo->id)}}" role="button" >Edit</a>
          <a class="btn btn-primary" href="{{route('delete',$studentinfo->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" role="button" >Delete</a>
        </td>
      </tr>
    @endforeach
    
    </tbody>
    
  </table>
@endsection