
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="col-lg-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Please Sign In
        </div>
        <div class="panel-body">
       </div>
        <div class="panel-footer">
            @yield('content')
        </div>
    </div>
</div>
<!-- jQuery -->
{!! Html::script('../bower_components/jquery/dist/jquery.min.js') !!}
        <!--<script src="../bower_components/jquery/dist/jquery.min.js"></script>-->

<!-- Bootstrap Core JavaScript -->
{!! Html::script('../bower_components/bootstrap/dist/js/bootstrap.min.js') !!}
        <!--<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->

<!-- Metis Menu Plugin JavaScript -->
{!! Html::script('../bower_components/metisMenu/dist/metisMenu.min.js')!!}
        <!--<script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>-->

<!-- Custom Theme JavaScript -->
{!! Html::script('../dist/js/sb-admin-2.js')!!}
<!--<script src="../dist/js/sb-admin-2.js"></script>-->

</body>

</html>

