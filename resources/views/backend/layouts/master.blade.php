<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Whilo Management</title>
    <link rel="stylesheet" href="/assets/loader/main.css">
    <link rel="stylesheet" href="/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/css/jquery-ui.min.css">
	<link rel="stylesheet" href="/admin/css/pageguide.css">
	<link rel="stylesheet" href="/admin/css/fullcalendar.css">
	<link rel="stylesheet" href="/admin/css/fullcalendar.print.css" media="print">	
	<link rel="stylesheet" href="/admin/css/chosen.css">	
	<link rel="stylesheet" href="/admin/css/select2.css">
    <link rel="stylesheet" href="/admin/css/select2.css">	
    <script src="https://use.fontawesome.com/ef2e0153b5.js"></script>
   
	<link rel="stylesheet" href="/admin/css/style.css">
	<link rel="stylesheet" href="/admin/css/themes.css">
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Montserrat:100,300,400,600,700,800,900'>
    <link href="/css/parsley.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/jquery-confirm.css" />
    
	<!-- jQuery -->

	<script src="/admin/js/jquery.min.js"></script>	<!-- Nice Scroll -->
	<script src="/admin/js/jquery-ui.js"></script>
	
</head>

<body><div id="loader-wrapper"><div id="loader"></div></div>
	@include('backend.header/header')
	@yield('content')
    @yield('after-scripts-end')
    <script src="/admin/js/jquery.touch-punch.min.js"></script>
	<script src="/admin/js/jquery.slimscroll.min.js"></script>
	<script src="/admin/js/bootstrap.min.js"></script>
	<script src="/admin/js/jquery.imagesloaded.min.js"></script>
	<script src="/admin/js/moment.min.js"></script>
	<script src="/admin/js/fullcalendar.min.js"></script>
    <script src="/assets/loader/main.js"></script>
    <script type="text/javascript" src="/js/parsley.js"></script>
    <script type="text/javascript" src="/js/jquery-confirm.js"></script>
    @include('backend.footer/footer')	
</body>

</html>
