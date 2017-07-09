@extends('layouts.subteacherLayout')


@section ('subteacher-content')
    
 <br>
  
     
  
     <div class="col-md-12">
        <a class="btn btn-success" href="">Show Marks</a>
        </div>

            {!!Form::open(['action'=>'markentry_controller@submitmarkssecondterm'])!!}


         

   <br> 
   <div style="border-bottom:1px solid #ccc; padding: 2px; margin-bottom: 10px;">
      <h2>Student of <b>Class</b> <?php echo $class?>,<b> sub: </b><?php echo $subject;?>, <b>Exam :</b>Second Term</h2>
      </div>
     

  <table class="table table-bordered" style="background: #fff ; width: 50%">
    <thead>
      <tr>
         <th>Roll</th>
        <th>Full Name</th>
        <th style="width: 200px;">{{$subject}}</th>
                
        
      </tr>
    </thead>
    <tbody>
    <?php foreach($secondtermdata as $value) { ?>
    <tr>
       <input type="hidden" name="class[]"  value="{{$class}}">
       <input type="hidden" name="subject[]"  value="{{$subject}}">
       <input type="hidden" name="year[]"  value="{{$value->year}}">
      <td><input type="text" name="roll[]" value="{{$value->roll}}" class="form-control" readonly="readonly"></td>
      <td><input type="text" name="name[]" value="{{$value->name}}" class="form-control" readonly="readonly"></td>
      <td><input class="form-control" type="text" name="marks[]"></td>

  



</tr>
     
<?php
}
?> 
   

    </tbody>
    
   
  </table>
  <button class="btn btn-success" style="position: center; margin-left: 450px;">submit</button> 
  
  
     {!!Form::close()!!}

@endsection