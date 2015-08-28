<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    @section('headercss')
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/plugins/pace/pace.css" rel="stylesheet">
    <link href="/css/plugins/toastr/toastr.min.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    @show

    @section('headerjs')
    @show

</head>

<body class="skin-admin">
	
	<!-- START WRAPPER -->
    <div id="wrapper">
	    
	    <!-- SIDE NAV -->

	    @include('layouts.sidenav')
	    <!-- END SIDE NAV -->
	    
		<!-- START PAGE WRAPPER -->
        <div id="page-wrapper" class="gray-bg dashoard-1">
	        
			<!-- SEARCH AND LOGOUT HEADER -->
			@include('layouts.site_header')
			
			<!-- PAGE CONTENT -->
			@yield('content')
			<!-- END PAGE CONTENT -->
        
    	</div>
		<!-- END PAGE WRAPPER -->
    	
    </div>
	<!-- END WRAPPER -->


    @section('footerjs')
        <!-- Main scripts -->
        <script src="/js/jquery-2.1.1.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/plugins/toastr/jquery.toastr.js"></script>
        <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="/js/plugins/pace/jquery.pace.js"></script>
        <script src="/js/common.js"></script>
        <script src="/js/modules/app_module.js"></script>
    @show
    
</body>
</html>
