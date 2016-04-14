<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
    
  <!-- start Adding the CSS  dependencies -->

    @include('layouts.Institute.dashboard.instituteCssIncludes')
    @yield('instituteIncludeCssFiles')
  <!-- stop Adding the CSS  dependencies -->

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
