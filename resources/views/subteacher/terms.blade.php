@extends('layouts.subteacherLayout')


@section ('subteacher-content')
    
 <center>
 
       <h1>Add Class <?php $class=$data[0]['class']; echo $data[0]['class'];?> <?php echo $subject;?> exam marks</h1>
 
   <br>
  
  

            <a class="btn btn-primary btn-lg" href="{{url('/subteacher/firstterms',$class)}}/{{$subject}}" target="_blank">1st term</a>
             
 

             <a class="btn btn-primary btn-lg" href="{{url('/subteacher/secondterms',$class)}}/{{$subject}}" target="_blank">2nd term</a>
              

              <a class="btn btn-primary btn-lg" href="{{url('/subteacher/anual',$class)}}/{{$subject}}" target="_blank">Anual</a>
            <!-- <button type="button" class="btn btn-primary btn-lg">2nd trem</button>
            <button type="button" class="btn btn-primary btn-lg">Annual</button>
           -->
 

  </center>


@endsection