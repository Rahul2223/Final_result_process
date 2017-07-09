<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Result Process</title>

    <!-- Bootstrap Core CSS -->
    <link href="{!!asset('vendor/bootstrap/css/bootstrap.min.css')!!}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{!!asset('vendor/metisMenu/metisMenu.min.css')!!}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{!!asset('dist/css/sb-admin-2.css')!!}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{!!asset('vendor/morrisjs/morris.css')!!}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{!!asset('vendor/font-awesome/css/font-awesome.min.css')!!}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
                <div style="width:1260px;">
                <a class="navbar-brand" href="index.html">Result process</a>
                </div>
                
                <div style="float: right;margin-top:10px;"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></div>
                
               
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                          <li><a  href="{{url('index')}}">Admin</a> </li>

                        <li><a  href="{{route('studentinfo')}}">Student</a> </li>
    <!--    <li><a href="class.html"> Class  </a></li> -->
        <li><a href="{{route('teacherinfo')}}"> Teacher</a></li>
        <li><a href="{{url('classteacherinfo')}}">Class Teacher</a></li>
        <li><a href="{{url('subteacher')}}">Subject Teacher</a></li>
        <!-- <li><a class="collapsed active" href="{{url('class')}}">Class</a>
                <ul class="sub-menu collapse" >
      
                          <li><a  href=""> Class One</a></li>
                          <li><a  href="">Class Two</a></li>
                          <li><a  href="">Class Three</a></li>
                          <li><a  href="">Class Four</a></li>
                          <li><a  href="">Class Five</a></li>
                        
                         </ul>
            </li> -->
        <!-- <li><a href="exam.html"> Exam List </a></li>
        <li><a href="marksSheet.html">MarkSheet</a> -->
        <li><a href="{{url('viewresult')}}">View Result</a></li>
        <li><a href="{{ url('/logout') }}">Logout</a></li>
         </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
             @yield('admin-content')     
            
        </div>
        <!-- /#page-wrapper -->

    </div> 
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
