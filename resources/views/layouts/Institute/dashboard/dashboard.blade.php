<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">

  <!-- Font Awesome -->


  <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('plugins/morris/morris.css')}}">
    <!-- Data Table -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">

    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    

    <!-- Our added additional dependencies start -->
    <!-- Datepicker -->
    <link rel="stylesheet" href="{{asset('js/jquery-ui.css')}}">
    <script src="{{asset('js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('js/jquery-ui.js')}}"></script>
    <link rel="stylesheet" href="{{asset('cssFiles/mapStyle.css')}}">

    <!-- Data Table non-responsive -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"> -->


    <!-- Data Table new responsive-->
     <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dataTables.bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.dataTables.min.css')}}">

    <!-- Our added additional dependencies end -->





    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

          @include('layouts.Institute.dashboard.Header')
          @yield('header')

          <!-- Left side column. contains the logo and sidebar -->
          @include('layouts.Institute.dashboard.Aside')
          @yield('aside')

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
            <!-- Content Header (Page header) -->
<!-- 
            <section class="content-header">
              <h1>
                Dashboard!
                <small>Control panel</small>
              </h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
              </ol>
            </section>
            @if (session('message'))
            <div class="alert alert-success text-center">
              <a href='#' class='close' data-dismiss='alert'>&times;</a>
              {{ session('message') }}
            </div>
            @endif
-->
            <!-- Main content -->

            <section class="content">
              <!-- Small boxes (Stat box) -->
              @yield('content')
              <!-- Main row -->

              
              
            </section><!-- /.content -->

          </div><!-- /.content-wrapper -->

          <!-- /.footer Start -->
          @include('layouts.Institute.dashboard.Footer')
          @yield('footer')

          <!-- /.Footer End -->

          <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

       
       <!-- start Adding the java script dependencies -->
       @include('layouts.Institute.dashboard.instituteJsIncludes')
       @yield('instituteIncludeFiles')

       <!-- end Adding the java script dependencies -->



 <!-- data table Scripts responsive--> 




        <script>
          $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false
            });
          });
        </script>

      </body>
      </html>
