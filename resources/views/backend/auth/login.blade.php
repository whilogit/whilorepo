<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Apple devices fullscreen -->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<!-- Apple devices fullscreen -->
	<meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<title>Whilo management</title>

	<link rel="stylesheet" href="/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin/css/style.css">
	<link rel="stylesheet" href="/admin/css/themes.css">
	<link href="/css/parsley.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/loader/main.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery-confirm.css" />

	<!-- jQuery -->
	<script type="text/javascript" src="http://gc.kis.scr.kaspersky-labs.com/7B853A33-A59E-1040-8666-1BB42337A1D7/main.js" charset="UTF-8"></script>
	<script src="/admin/js/jquery.min.js"></script>
	<script src="/admin/js/jquery.nicescroll.min.js"></script>
	
	<script src="/admin/js/jquery.icheck.min.js"></script>
	<script src="/admin/js/bootstrap.min.js"></script>
    <script src="/assets/loader/main.js"></script>
    <script type="text/javascript" src="/js/jquery-confirm.js"></script>

    <script type="text/javascript" src="/js/parsley.js"></script>
    <script src="/admin/app/login.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="/admin/img/apple-touch-icon-precomposed.png" />

</head>
<body class='login'>
	<div class="wrapper">
		<h1>
			<a href="/admin/login">
				Whilo</a>
		</h1>
		<div class="login-body">
			<h2>SIGN IN</h2>
			<form class='form-validate' data-parsley-validate name="login">
				<div class="form-group">
					<div class="email controls">
						<input type="email" required="required" data-parsley-maxlength="99" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" name='email' placeholder="Email address" class='form-control'>
					</div>
				</div>
				<div class="form-group">
					<div class="pw controls">
						<input type="password" required="required" name="password" data-parsley-maxlength="25" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" placeholder="Password" class='form-control'>
					</div>
				</div>
				<div class="submit">
					<input type="button" value="Sign in" class='btn btn-primary' name="btnlogin">
				</div>
                <ul class="responsereport" style="color:#F00"></ul>
            
			</form>
			<div class="forget">
				<a href="#">
					<span>&nbsp;</span>
				</a>
			</div>
		</div>
	</div>
	
</body>

</html>
