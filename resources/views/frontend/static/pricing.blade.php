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
                    <h2>Pricing</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Pricing</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



   <section class="slice bg-base" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row"><h4 class="col-md-12 text-center">Pricing</h4>
                    <div class="col-md-12">
<div class="col-md-8 col-md-offset-2 col-sm-6 col-xs-12">
         <table class="table  table-responsive"><tbody>
<tr><th>&nbsp;</th><th>Express Plan</th><th>Enterprise Plan</th><th>Exclusive Plan</th></tr>
<tr><th>CV Access</th><td>350 (50 Profiles per Day)</td><td>975 (65 Profiles per Day)</td><td>2400 (80 Profiles per Day)</td></tr>
<tr><th>Job Post Limit</th><td>2</td><td>5</td><td>15</td></tr>
<tr><th>Duration</th><td>7</td><td>15</td><td>30</td></tr>
<tr><th>Search Criterion</th><td>Location Based</td><td>Location Based</td><td>Location Based</td></tr>
<tr><th>Emails</th><td>FREE</td><td>FREE</td><td>FREE</td></tr>
<tr><th>Price(Rs.)</th><td>2000</td><td>4200</td><td>8500</td></tr>
<tr><th>&nbsp;</th><td><a href="" class="btn btn-lg">Subscribe Now</a></td><td><a href="" class="btn btn-lg">Subscribe Now</a></td><td><a href="" class="btn btn-lg">Subscribe Now</a></td></tr>
<tbody>
</table>
        </div>
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
th, td {
    border: 1px solid #b2aeae;
    font-weight: 600;
}
</style>
@endsection

@section('after-scripts-end')
@endsection
