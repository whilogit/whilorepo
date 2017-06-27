@extends('frontend.layouts.master')
@section('content')
<div class="pg-opt" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Job Details</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb"><li><a href="/">Home</a></li><li class="active">Job Details</li></ol>
                </div>
            </div>
        </div>
    </div>
    <br />

 <section class="slice bg-white">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>{{ $jobdetails->jobTitle  }}</h2>
						
                         <div class="section-title-wr">
                            <h3 class="section-title left"><span>Job description</span></h3>
                        </div>
                        <div>{!! $jobdetails->jobDescription !!}</div>

                        <hr>

                       <ul class="list-check">
                            <li><i class="fa fa-check"></i> <strong>Location:</strong> {{ $jobdetails->locationName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>Job Type:</strong> {{ $jobdetails->employmentmodeName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>lastdate:</strong> {{ $jobdetails->lastdate  }}</li>
                            <li><i class="fa fa-check"></i> <strong>experienceName:</strong> {{ $jobdetails->experienceName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>salaryName:</strong> {{ $jobdetails->salaryName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>functionalName:</strong> {{ $jobdetails->functionalName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>rolecategoryName:</strong> {{ $jobdetails->rolecategoryName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>jobroleName:</strong> {{ $jobdetails->jobroleName  }}</li>
                            
                             <li><i class="fa fa-check"></i> <strong>educationName:</strong> {{ $jobdetails->educationName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>joiningtimeName:</strong> {{ $jobdetails->joiningtimeName  }}</li>
                            <li><i class="fa fa-check"></i> <strong>totalapplied:</strong> {{ $jobdetails->totalapplied  }}</li>
                        </ul>

						
						
                        <hr>

                    </div>
                    <div class="col-md-4">
					<h3>{{ $jobdetails->companyName }}</h3>
					 <img src="/<?php echo $jobdetails->logoCategory == "" ? "" : "companylogo.get/" ?>{{ $jobdetails->logoCategory }}/{{ $jobdetails->dirYear }}/{{ $jobdetails->dirMonth }}/{{ $jobdetails->logoName }}/{{ $jobdetails->crTime }}/s.{{ $jobdetails->logExt }}" class="img-responsive" style="width: 50%;border: 1px solid grey;margin-bottom: 5px;
" alt="{{ $jobdetails->companyName }}">
					<button type="submit" class="btn btn-alt btn-icon btn-icon-right btn-envelope">
                                    <span>Apply Now!</span>
                                </button><br><br>
                        <!-- MAP -->
                        <div class="panel panel-default panel-sidebar-1">
                            <div class="panel-heading"><h2>Location</h2></div>
<div id="map-container" class="z-depth-1" style="height: 300px"></div>                            
							</div>

                        <!-- NEWSLETTER WIDGET -->
                        <div class="panel panel-default panel-sidebar-1">
                            <div class="panel-heading"><h2>Share This Position</h2></div>
                           
                                <div class="panel-body">
                                     <ul class="share_social pull-left">
                                       <li>
                                            <a href="#!">
                                                <i class="zmdi zmdi-facebook waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-twitter waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-linkedin waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                            <a href="#!">
                                               <i class="zmdi zmdi-google waves-effect"></i>
                                            </a>
                                        </li> 
                                       <li>
                                           <a href="#!">
                                               <i class="zmdi zmdi-pinterest waves-effect"></i>
                                            </a>
                                        </li> 
                                    </ul> 
                                </div>
                                  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('after-scripts-end')
    <script>
       
    </script>
@stop