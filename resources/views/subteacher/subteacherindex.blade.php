@extends('layouts.subteacherLayout')


@section ('subteacher-content')
    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
    <div class="col-lg-12">
        <h1>Welcome <?php echo (Session::get('name'));?></h1>
        
   </div>
@endsection