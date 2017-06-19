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
                    <h2>Payroll</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Payroll</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



   <section class="slice bg-base" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row"><h4 class="col-md-12">Payroll</h4>
                    <div class="col-md-12"><p>
                        Whilo PaySmart – Paving way for innovative payroll services  <br/>
With steady advancement in technology, legislation and work culture values, it has become essential to see payroll as a specialized function. For that reason, outsourcing a company’s payroll function aims at bringing process efficiency and enables the company to focus its energies on its primary business. <br/> <br/>
In this pursuit, Whilo brings its payroll expertise to manage the most complex payroll and tax scenarios, supported by our indigenous and powerful payroll processing engine – PaySmart. This suite of solutions contains everything that an organization would need to effectively pursue its HR functions. Our payroll outsourcing experts in India are adept at managing some of the most complex pay and tax scenarios, and possess extensive experience with local legislations for 100 % statutory compliance. <br/> <br/>
Our payroll services benefit numerous organizations in India across diverse industries like Manufacturing, Telecom, IT, ITES, Retail, BFSI, FMCG, Logistics, Engineering, Pharmaceuticals and Entertainment. PaySmart includes: <br/> 
 <ul  class="list-check">  <li><i class="fa fa-caret-right" aria-hidden="true"></i> Payroll processing</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Reimbursement processing</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Statutory compliances</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Year-end processing</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Reporting – MIS, Control and Dashboard</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Payroll accounting</li>

<li><i class="fa fa-caret-right" aria-hidden="true"></i> Final settlements  </li>
</ul>

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
