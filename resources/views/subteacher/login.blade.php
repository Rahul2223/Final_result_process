@extends('layouts.login')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">

               @if(session()->has('message'))
    <div class="alert alert-danger">
        {{ session()->get('message') }}
    </div>
@endif
                    <form class="form-horizontal" role="form" method="POST" action="{{url('/subteacher/afterlogin')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('mobileno') ? ' has-error' : '' }}">
                            <label for="mobieno" class="col-md-4 control-label">Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobileno" type="text" class="form-control" name="mobileno" required="required">

                               
                            </div>
                            
                        </div>

                       <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required="required">
                                

                                
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
