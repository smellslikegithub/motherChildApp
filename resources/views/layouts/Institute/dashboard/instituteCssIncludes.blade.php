@section('instituteIncludeCssFiles')
	

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
@stop