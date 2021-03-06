<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>cv-admin</title>

    <!-- Bootstrap Core CSS -->

    {!!Html::style('../bower_components/bootstrap/dist/css/bootstrap.min.css')!!}

    <!-- MetisMenu CSS -->
    {!!Html::style('../bower_components/metisMenu/dist/metisMenu.min.css')!!}

    <!-- Custom CSS -->
    {!!Html::style('../dist/css/sb-admin-2.css')!!}

    <!-- Las imagenes del menu -->
    {!!Html::style('../bower_components/font-awesome/css/font-awesome.min.css')!!}

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     <ul>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">cv Admin </a>
        </div>
     </ul>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="">NombreUsuario
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href=""><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{!! URL::to('logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

    </nav>

        @include('admin.menu')

    <!-- Page Content -->
    <div id="page-wrapper">

        @yield('content')

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
{!!Html::script('../bower_components/jquery/dist/jquery.min.js')!!}

<!-- Bootstrap Core JavaScript -->
{!!Html::script('../bower_components/bootstrap/dist/js/bootstrap.min.js')!!}

<!-- Metis Menu Plugin JavaScript -->
{!!Html::script('../bower_components/metisMenu/dist/metisMenu.min.js')!!}

<!-- Custom Theme JavaScript -->
{!!Html::script('../dist/js/sb-admin-2.js')!!}



</body>

</html>
