@extends('backend.layouts.master')

@section('content')


         <div id="page-wrapper">   
      <div class="row">
     <div class="col-md-12">
      <div class="page-title">
       <h2>Dashboard<small></small></h2>
        <ol class="breadcrumb">
         <li class="active"><i class="fa fa-dashboard"></i> Dashboard Content Overview</li>
         
        </ol>
       </div>
      </div>
     </div> 
                                                 
        <div class="row" >
                   
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading green">
                                    <i class="fa fa-money fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content green">
                                <div class="circle-tile-description text-faded">
                                    Revenue
                                </div>
                                <div class="circle-tile-number text-faded">
                                 Rs. {{ $data['totalAmount'][0] ->revenue }}
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="/dashboard/companylist">
                                <div class="circle-tile-heading orange">
                                    <i class="fa fa-building-o fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content orange">
                                <div class="circle-tile-description text-faded">
                                    Company & Consultancy List 
                                </div>
                                <div class="circle-tile-number text-faded">
                                    9 New
                                </div>
                                <a href="/dashboard/companylist" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="/dashboard/postedjobs">
                                <div class="circle-tile-heading blue">
                                    <i class="fa fa-briefcase fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content blue">
                                <div class="circle-tile-description text-faded">
                                   Posted Jobs
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="/dashboard/postedjobs" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading skyblue">
                                    <i class="fa fa-level-down fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content skyblue">
                                <div class="circle-tile-description text-faded">
                                   Plan Expiry
                                </div>
                                <div class="circle-tile-number text-faded">
                                19 
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                 
             <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading violetred">
                                    <i class="fa fa-shield fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content violetred">
                                <div class="circle-tile-description text-faded">
                                    Shortlisted Candidates
                                </div>
                                <div class="circle-tile-number text-faded">
                                    18
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
             <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading dark-blue">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content dark-blue">
                                <div class="circle-tile-description text-faded">
                                    Talents List
                                </div>
                                <div class="circle-tile-number text-faded">
                                    265
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                
                </div>
               <div class="row" >
                
                               <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="/dashboard/paymentdetails">
                                <div class="circle-tile-heading sandlebrown">
                                    <i class="fa fa-credit-card fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content sandlebrown">
                                <div class="circle-tile-description text-faded">
                                    Payment Details
                                </div>
                                <div class="circle-tile-number text-faded">
                                    24
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="/dashboard/paymentdetails" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                       <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading purple">
                                    <i class="fa fa-plus fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content purple">
                                <div class="circle-tile-description text-faded">
                                    Add  Company /Consultancy
                                </div>
                                <div class="circle-tile-number text-faded">
                                    new
                                    <span id="sparklineD"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                   
           
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading seagreen">
                                    <i class="fa fa-diamond fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content seagreen">
                                <div class="circle-tile-description text-faded">
                                   Paid Company & Consultancy 
                                </div>
                                <div class="circle-tile-number text-faded">
                                   new
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                   
                
                    <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="/dashboard/workfeatures">
                                <div class="circle-tile-heading maroon">
                                    <i class="fa fa-tasks fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content maroon">
                                <div class="circle-tile-description text-faded">
                                    Manage Basic Features
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="/dashboard/workfeatures" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading red">
                                    <i class="fa fa-certificate fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content red">
                                <div class="circle-tile-description text-faded">
                                   Hired Candidates
                                </div>
                                <div class="circle-tile-number text-faded">
                                    24
                                    <span id="sparklineC"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
           
                       <div class="col-lg-2 col-sm-6">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading coral">
                                    <i class="fa fa-plus fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content coral">
                                <div class="circle-tile-description text-faded">
                                    <b> Add New Talents</b>
                                </div>
                                <div class="circle-tile-number text-faded">
                                    265
                                    <span id="sparklineA"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                     <div class="row" >
                
                               <div class="col-lg-2 col-sm-6">
                        
                               </div>
                       <div class="col-lg-2 col-sm-12">
                      
                    </div>
                   
           
                
                    <div class="col-lg-2 col-sm-12">
                        <div class="circle-tile">
                            <a href="#">
                                    <div class="circle-tile-heading olive">
                                    <i class="fa fa-youtube fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content olive">
                                <div class="circle-tile-description text-faded">
                                   Approve Company Video
                                </div>
                                <div class="circle-tile-number text-faded">
                                    10
                                    <span id="sparklineB"></span>
                                </div>
                                <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                      <div class="col-lg-2 col-sm-6">
                       
                    </div>
           
                       <div class="col-lg-2 col-sm-6">
                       
                    </div>
                </div>
       
       
</div>

   
   

@endsection

@section('after-scripts-end')

@stop
<style>

body{background-color: #ecf0f1;}
.nav-sidebar
{
    
    width:100px;
}

.navbar-inverse {
    background-color: #2C3E50;
    border-color: #2C3E50;
}

.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 0px;
    border: 0px solid transparent;
}
.navbar-nav > li > a {
    padding-top: 20px;
    padding-bottom: 10px;
    line-height: 20px;
}
@media (min-width: 768px){

.navbar {
    border-radius: 0px;
}}

.navbar-brand {
    float: left;
    height: auto;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}
.sidebar-toggle {
    color: #fff;
    font-size: 28px;
    display: inline-block;
    padding: 3px 22px;
}
@media (min-width:768px){
.container-1{width:15%;float:left;}
.container-2{width:100%;float: left;}
}

@media (max-width:768px){
.container-1{width:100%;}
.container-2{width:100%;}
}
.container-1:after,
.container-2:before,
{
  display: table;
  content: " ";
}
.container-1:after,
.container-2:after,
{clear: both;}

.container-1{display: none;}


/*sidebar-toggle=============*/
.sidebar-toggle:hover, .sidebar-toggle:focus {
    color: #fff;
    text-decoration: underline;
}


@media (min-width: 768px){

#page-wrapper {
   
    padding: 0 30px;
    min-height: 680px;
    border-left: 1px solid #2c3e50;
}
}

#page-wrapper {
    padding: 0 15px;
    border: none;
    
}

.date-picker{    
    border-color: #138871;
    color: #fff;
    background-color: #149077;
    margin-top: -7px;
    border-radius: 0px;
    margin-right: -15px;
}

#page-wrapper .breadcrumb {
    padding: 8px 15px;
    margin-bottom: 20px;
    list-style: none;
    background-color: #e0e7e8;
    border-radius: 0px;
    
}




@media (min-width: 768px){
.circle-tile {
    margin-bottom: 30px;
}
}

.circle-tile {
    margin-bottom: 15px;
    text-align: center;
}

.circle-tile-heading {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto -40px;
    border: 3px solid rgba(255,255,255,0.3);
    border-radius: 100%;
    color: #fff;
    transition: all ease-in-out .3s;
}

/* -- Background Helper Classes */

/* Use these to cuztomize the background color of a div. These are used along with tiles, or any other div you want to customize. */

 .dark-blue {
    background-color: #34495e;
}

.green {
    background-color: #16a085;
}

.blue {
    background-color: #2980b9;
}

.orange {
    background-color: #f39c12;
}

.red {
    background-color: #e74c3c;
}

.purple {
    background-color: #8e44ad;
}

.dark-gray {
    background-color: #7f8c8d;
}

.gray {
    background-color: #95a5a6;
}

.light-gray {
    background-color: #bdc3c7;
}

.coral {
    background-color: #F08080;
}
.maroon{
    
    background-color: #800000;
}
.seagreen{
    background-color: #20B2AA;
}
.skyblue
{
     background-color: #808000
    
}
.violetred
{
    
    background-color: #DB7093
}
.sandlebrown
{
    
    background-color: #8B4513
}
.olive
{
    background-color: #8000ff 
}
/* -- Text Color Helper Classes */

 .text-dark-blue {
    color: #34495e;
}

.text-green {
    color: #16a085;
}

.text-blue {
    color: #2980b9;
}

.text-orange {
    color: #f39c12;
}

.text-red {
    color: #e74c3c;
}

.text-purple {
    color: #8e44ad;
}

.text-faded {
    color: rgba(255,255,255,0.7);
}



.circle-tile-heading .fa {
    line-height: 80px;
}

.circle-tile-content {
    padding-top: 50px;
    font-weight: bold;
    color: #FFFAF0
}
.circle-tile-description {
    text-transform: uppercase;
    font-weight: bold;
    color: #FFFAF0
}

.text-faded {
    color: rgba(255,255,255,0.7);
}

.circle-tile-number {
    padding: 5px 0 15px;
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
}

.circle-tile-footer {
    display: block;
    padding: 5px;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.1);
    transition: all ease-in-out .3s;
}

.circle-tile-footer:hover {
    text-decoration: none;
    color: rgba(255,255,255,0.5);
    background-color: rgba(0,0,0,0.2);
}


.morning {
    background: url(https://lh3.googleusercontent.com/-1YbV7nsVnX8/WMugaq-6BEI/AAAAAAAADSg/0wPfQ84vMUcCle_SkgiUDOumUKscMaA8QCL0B/w530-d-h353-p-rw/widget-bg-morning.jpg) center bottom no-repeat;
    background-size: cover;
}

.time-widget {
    margin-top: 5px;
    overflow: hidden;
    text-align: center;
    font-size: 1.75em;
}

.time-widget-heading {
    text-transform: uppercase;
    font-size: .5em;
    font-weight: 400;
    color: #fff;
}
#datetime{color:#fff;}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0,0,0,0.9);
}

.tile {
    margin-bottom: 15px;
    padding: 15px;
    overflow: hidden;
    color: #fff;
}
    </style>