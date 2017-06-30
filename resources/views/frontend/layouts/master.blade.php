<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
 <link href="{{ url('images/whilo-fav.png') }}" rel="icon" type="image/png">
<meta name="keywords" content="Jobs, Recruitment,Job Search, Employment,Job Vacancies,whilo India,Talents at whilo, get jobs,whilo recruitment,whilo jobs,	jobs india,new jobs,manager jobs,sales jobs,">
<meta name="description" content="Whilo is India’s juvenile career site for job seekers and a leader in HR technology solutions for employers. Since 2012, we have helped connect employers and candidates through exclusive partnerships and community sites, social networking, and mobile optimization.">
        <title><?php echo env('APP_NAME', 'jobportal') ?></title>
      <!-- Essential styles -->
<link rel="stylesheet" href="{{ url('/assets/bootstrap/css/bootstrap.min.css')}}" type="text/css">
<script src="https://use.fontawesome.com/ef2e0153b5.js"></script>
<link id="wpStylesheet" type="text/css" href="{{ url('/css/global-style.css') }}" rel="stylesheet" media="screen">
<link rel="stylesheet" type="text/css" href="{{ url('/css/zoomslider.css')}}" />
<!-- Assets -->
<link rel="stylesheet" href="{{ url('/assets/owl-carousel/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ url('/assets/owl-carousel/owl.theme.css') }}">
<link rel="stylesheet" href="{{ url('/assets/sky-forms/css/sky-forms.css') }}">    
<!--[if lt IE 9]>
<link rel="stylesheet" href="/assets/sky-forms/css/sky-forms-ie8.css">
<![endif]-->
<link href="{{ url('/css/parsley.css') }}" rel="stylesheet">
<!-- Required JS -->
<script src="{{ url('/js/jquery.js') }}"></script>
<script src="{{ url('/js/jquery-ui.min.js')}}"></script>
    </head>
    <body id="app-layout">
        <div id="loader-wrapper"><div id="loader"></div></div>
		<div class="body-wrap">
        <!-- header -->
         @include('frontend.header.header')
        <!-- end header -->
        
        
         <!-- body -->
           @yield('content')
        <!-- end body -->
        
        
        
         <!-- footer -->
         @include('frontend.footer.footer')
        <!-- end footer -->
        
        
        </div>
        
        
  @yield('after-scripts-end')		
 <script src="{{ url('/js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{ url('/js/jquery.zoomslider.min.js')}}"></script>
<script src="{{ url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ url('/assets/loader/main.js')}}"></script>
<script type="text/javascript" src="{{ url('/js/jquery-confirm.js')}}"></script>
<script type="text/javascript" src="{{ url('/js/parsley.js')}}"></script>
<script src="{{ url('/assets/responsive-mobile-nav/js/jquery.dlmenu.js')}}"></script>
<script src="{{ url('/assets/responsive-mobile-nav/js/jquery.dlmenu.autofill.js')}}"></script>
<script src="{{ url('/assets/sky-forms/js/jquery.form.min.js')}}"></script>
<script src="{{ url('/assets/page-scroller/jquery.ui.totop.min.js')}}"></script>
<script src="{{ url('/assets/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{ url('/js/wp.app.js')}}"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 
  ga('create', 'UA-83598109-1', 'auto');
  ga('send', 'pageview');
 
</script>
<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
<link rel="stylesheet" href="{{ url('/assets/extra/jquery-confirm.min.css') }}">
<script src="{{ url('/assets/extra/jquery-confirm.min.js')}}"></script>
    </body>
</html>