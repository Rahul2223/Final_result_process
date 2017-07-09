@extends('layouts.classteacherLayout')


@section ('classteacher-content')
    <div class="col-lg-12">
        <!-- <h1 class="page-header">Dashboard</h1> -->
      <center><h1>Class Techer of Class <?php echo (Session::get('class'));?></h1></center>
        
   </div>
@endsection