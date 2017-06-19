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
                    <h2>Employee Verification</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Employee Verification</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



   <section class="slice bg-base" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row"><h4 class="col-md-12 text-center">Employee Verification</h4>
                    <div class="col-md-12"><p>
                    We have developed the e-Verify for Job Seekers, as part of our ongoing commitment to providing valid & skilled talents that help our clients recruit right.<br/>
As a process, we promote all job seeking candidates to update their current/ previous employer’s email credentials of the reporting manager, HR Manager and of a colleague. <br/>Whilo’s e-Verify processes an auto email to the mentioned email IDs with a set of questions towards collecting feedback based on the reviews and ratings for the candidate, thus ensuring that you get to understand about the candidate and recruit right.



</p>
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
</style>
@endsection

@section('after-scripts-end')
@endsection
