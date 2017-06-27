@extends('frontend.layouts.master')

@section('content')


<!-- MAIN WRAPPER -->
<div class="body-wrap">
   <!-- HEADER -->
        <div id="divHeaderWrapper" class="navbar-fixed-top bounceInDown animated">
            <header class="header-standard-2">     
    <!-- MAIN NAV -->
    <div class="navbar navbar-wp navbar-arrow mega-nav" role="navigation">
        <div class="container">
            <div class="navbar-header">
              
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars icon-custom"></i>
                </button>

                <a class="navbar-brand" href="index.html" title="Whilo | Job Portal and one stop solution for your career">
                    <img src="images/logo.png" alt="Whilo | Job Portal and one stop solution for your career">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                   
                    <li class=" mega-dropdown-fluid"><a href="#">TALENTS</a></li>
					<li class=" mega-dropdown-fluid"><a href="#">COMPANIES</a></li>
					<li class=" mega-dropdown-fluid"><a href="#">CONSULTANTS</a></li>
					<li class=" mega-dropdown-fluid"><a href="#">COURSES</a></li>
                                        <li class=" mega-dropdown-fluid"><a href="#">SERVICES</a></li>
		        </ul>
				<ul class="nav navbar-nav navbar-right">
                   
                    <li class=" mega-dropdown-fluid"><a href="#">LOGIN</a></li>
					<li class=" mega-dropdown-fluid"><a href="#">FOR Employers</a></li>
		        </ul>
               
            </div><!--/.nav-collapse -->
        </div>
    </div>
</header>        </div>

        <!-- Optional header components (ex: slider) -->
  <!-- MAIN CONTENT -->
        <div class="pg-opt" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Curriculum</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Curriculum</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



   <section class="slice bg-base" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row"><h4 class="col-md-12 text-center">Curriculum</h4>
                    <div class="col-md-12">
<table class="table  table-responsive"><tr><th>Core Skills</th><th>Computer Skills</th><th>Microsoft Office</th></tr>
<tbody><tr><td>Spoken English</td><td>Types of Computer</td><td>MS Word - Basics</td></tr>
<tr><td>Time Management</td><td>Computer Hardware & Software</td><td>MS Word - Advanced</td></tr>
<tr><td>Team Work</td><td>Internet</td><td>MS Excel - Basic</td></tr>
<tr><td>Project Handling</td><td>Keywords & Browsing</td><td>MS Excel - Advanced</td></tr>
<tr><td>Resume Drafting</td><td>Blogging</td><td>MS Excel - Charts & Formulas</td></tr>
<tr><td>Interview Skills</td><td>Google Drive</td><td>MS Excel - Reporting Tools</td></tr>
<tr><td>Public Speaking</td><td>Email Account</td><td>MS PowerPoint - Basic</td></tr>
<tr><td>Problem Solving</td><td>Email Etiquette</td><td>MS PowerPoint - Advanced</td></tr>
<tbody></table>


                    </div>
                  

                </div>
            </div>
        </div>
    </section>
</div>

<style>
body{font-family:Tw Cen MT !important;}
ul li,p{    font-size: 16px;
    line-height: 21px;}
th,td{border:1px solid grey;}
</style>
@endsection

@section('after-scripts-end')
@endsection
