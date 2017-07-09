@extends('layouts.subteacherLayout')


@section ('subteacher-content')

   <br>
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
  <table class="table table-bordered" style="background: #fff;">
    <thead>
      <tr>
         <th>Class</th>
        <th>Subject</th>
        <th>Add Marks</th>
        
      </tr>
    </thead>
    <tbody>
    <?php foreach($data as $value) { ?>
    <tr>
    <form action="">
  <td><input type="text" class="form-control" value="{{$value->class}}" readonly="readonly"></td>
    <td><input type="text" class="form-control"  value= "{{$value->subject}}" readonly="readonly"></td>
  

  <td><a class="btn btn-primary" href="{{url('subteacher/terms')}}/{{$value->class}}/{{$value->subject}}" target="_Blank" role="button">Add Marks</a>  </td>
 </form> 
</tr>
<?php
 } 
?>



    </tbody>
    
   
  </table>



@endsection