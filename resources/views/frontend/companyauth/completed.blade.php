@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Registration successfully completed</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                       
                        <li class="active">Sign up</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
   
    <section class="slice slice-lg bg-image" name="ccomplete" style="background-image:url(../images/mainbg.png)">
        <div class="wp-section">
            <div class="container">
			<div class="row">
			<div class="alert alert-success fade in">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Well done!</strong> You have successfully submitted your details.Please wait until we confirm your registration :-)
</div>
			</div>
                <div class="row">
                 <div class="section slider">					
				<div class="row">
					<!-- carousel -->
					<div class="col-md-4">
						<div id="product-carousel" class="carousel slide" data-ride="carousel">
										<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<!-- item -->
                                <?php $active = "active"; ?>
                                 @foreach ($companyimages as $images)
                                
								<div class="item <?php echo $active; ?>">
									<div class="carousel-image">
										<!-- image-wrapper -->
										<img width="100%" src="/display/image/{{ $images->imageCategory }}/{{ $images->dirYear }}/{{ $images->dirMonth }}/{{ $images->logoName }}/{{ $images->crTime }}/l.{{ $images->logExt }}" alt="Featured Image" class="img-responsive" kasperskylab_antibanner="on">
									</div>
								</div><!-- item -->
                                <?php echo $active=""; ?>
								@endforeach 
								
							</div><!-- carousel-inner -->

						</div>
					</div><!-- Controls -->	

					<!-- slider-text -->
					<div class="col-md-8">
                                        <div class="panel panel-default panel-sidebar-1">
                                            <div class="panel-heading">
                                                <h2>@foreach ($companylogo as $logo) <img src="/display/image/{{ $logo->logoCategory }}/{{ $logo->dirYear }}/{{ $logo->dirMonth }}/{{ $logo->logoName }}/{{ $logo->crTime }}/s.{{ $logo->logExt }}" style="border:1px solid #ccc"> @endforeach <b>{{ $commaster->companyName }}</b></h2>
                                            </div>
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-6 br">
                                                        <strong>Address</strong>
                                                        <p class="p1">{{ $commaster->address }}, <br>{{ $commaster->locationName }}<br>Pin: {{ $commaster->pincode }}</p>
                                                          <p class="p1"><span>Website</span>:{{ $commaster->website }}</p>
														</div>
                                                    <div class="col-md-6">
                                                         <strong>Contact Details</strong>
                                                        <p class="p1"><span>Mobile</span>:{{ $commaster->mobileNumber }}</p>
														 <p class="p1"><span>Phone</span>:{{ $commaster->phone }}</p>
														  <p class="p1"><span>Email</span>:{{ $commaster->emailAddress }}</p>
														 
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
										<div class="panel panel-default panel-sidebar-1">
										 <div class="panel-heading"><div class="social-links">
								<h2><b>Share this</b></h2></div>
						 <div class="panel-body">		<ul class="list-inline">
									<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter-square  fa-2x"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus-square  fa-2x"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin-square  fa-2x"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-square  fa-2x"></i></a></li>
									<li><a href="#"><i class="fa fa-tumblr-square  fa-2x"></i></a></li>
								</ul>
							</div></div>
										</div>
                                    </div><!-- slider-text -->				
				</div>				
			</div>
			<br>
			<div class="description-info">
				<div class="row">
				
<div class="col-md-12">
                                <div class="panel panel-default panel-sidebar-1">
                                    <div class="panel-heading">
                                        <h2>Short Description</h2>
                                    </div>
                                    
                                    
                                    <div class="panel-body">
                                        
                                        <p>{{ $commaster->aboutbio }} </p>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-md-12">
                    <div class="col-md-10">
                        <div class="form-group">
                           &nbsp;
                        </div> </div>
                    <div class="col-md-2">
                        <div class="form-group">
                           <a class="btn btn-lg btn-block btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit">
        <span>Complete</span>
    </a>
                        </div> </div>              
                    </div>
                            
				</div><!-- row -->
			</div>
                           
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.ccomplete.js"></script>
@stop
