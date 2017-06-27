@extends('frontend.layouts.master')

@section('content')
      <div class="static-page-image">
		<section class="prlx-bg inset-shadow-1" data-stellar-ratio="2" style="min-height: 592px;    margin-top: 5%; height: auto;">
<div id="demo-1" data-zs-src='["/images/2.jpg", "/images/1.jpg", "/images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
      
        <div class="container">
		 <div class="pt-10p">
       
            <form class="form-light" name="search">
			
                <div class="col-md-8 col-md-offset-2 pb-20 pt-20 alpha" >  <!-- style="background: hsla(0, 100%, 100%, 0.34);box-shadow: 0px 0px 12px 1px hsla(0, 100%, 100%, 0.34);" -->
				 <div class="section-title-wr" >
                <h3 class="section-title center">
                    <span class="c-white">JOB SEARCH</span>
                    
                </h3>
            </div>
                     <div class="col-md-5">
                                <div class="form-group form-group-lg">
                                    <label class="c-white">KEYWORDS</label>
                                    <input type="text" class="form-control input-lg" required="required" name="keyword" placeholder="Eg.Webdesign,Java,C#,etc ...">
                                </div>
                            </div>
                    <div class="col-md-5">
                                <div class="form-group form-group-lg">
                                    <label class="c-white">LOCATION</label>
                                    <select type="text" class="form-control input-lg" required="required" name="locations"><option value="">-Locations-</option>
                                     @foreach ($locations as $location)
                                                  <option  value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                     @endforeach
                                    </select>
                                </div>
                            </div>
             <div class="col-md-2 text-center">
 <div class="form-group form-group-lg">
                                    <label>&nbsp;</label>
                        <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg" title="">
                            <span class="c-white">SEARCH</span>
                        </a>
                    </div>
 </div>
 <!-- Social Media Icons -->
           
               			
            </form>

           
			</div>
        </div></div>
        </div>
    </section>
    
    </div>
<section class="slice dark has-pattern">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <div id="carouselTestimonial" class="carousel carousel-testimonials slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselTestimonial" data-slide-to="0" class=""></li>
                                <li data-target="#carouselTestimonial" data-slide-to="1" class=""></li>
                                <li data-target="#carouselTestimonial" data-slide-to="2" class="active"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <div class="text-center">
                                    
                                        <p class="testimonial-text">
                                        Talents: Find talented candidates though our social recruiting system based on their skills, interests and actions. Get verified profiles, candidate ratings from their current/ previous employer.
                                        </p>
                                      
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="text-center">
                                  
                                        <p class="testimonial-text">
                                       Companies: Learn about the companies offering great careers, check out the work culture, get inside view of the office, meet your next team!
                                        </p>
                                       
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="text-center">
                                       
                                        <p class="testimonial-text">
                                       Consultants: Extended your employment offers opportunity, connect with great consultants with greater clients.

                                        </p>
                                       
                                        <span class="clearfix"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 <section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-image: url(/images/parallax1.jpg) !important;background-size: cover;">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Hot Companies</span></h3>
                </div>
               
                <div id="carouselJobs" class="carousel carousel-3 slide animate-hover-slide" style="background: #fbfafa;">
                   <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselJobs"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right" href="#carouselJobs"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner"><br/>
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wp-block inverse">
                           <div class="col-md-6">
						    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/22439234"></iframe>
                        </div>
						   </div>
						   <div class="col-md-6">
						   <h2 class="c-black">Alpha Technologies</h2>
						   <div class="post-tags">Openings For:<a href="#"> Accounts Manager (1)</a>, <a href="#">, Android Developers (13)</a>, <a href="#">SEO Expert (3)</a>
						   </div>
						    <div class="post-tags">Location:<a> Bangalore</a>
						   </div>
						    <div class="post-tags">Experience:<a href="#">  Accounts Manager - Max 8 Years</a>, <a href="#">, Android Developer - Max 2 years</a>
						   </div>
						    <div class="post-tags">Job Type:<a href="#">Full Time</a>, <a href="#">,  Day Job</a>
						   </div>
						    <div class="post-tags">Salary:<a href="#"> Accounts Manager - 8 lakh PA</a>, <a href="#">Android Developer - 4 lakh PA</a>
						   </div>
						    <div class="post-tags">Company Profile:<a> Alpha Technologies is a technology start-up founded by IIT, Mumbai alumina's Shreyas Rao and Manoj Bhatia in 2012, funded by Accel Partners, company is operational from Bangalore with current employment base of 93 members. Company is working on tech in healthcare platform with several apps helping people to have better and health life.</a>
						   </div>
						   </div>
                        </div>
                                </div>
                         
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                               
							
                            </div>
                        </div>
                        <div class="item">
                               <div class="row">
                                <div class="col-md-12">
                                    <div class="wp-block inverse">
                           <div class="col-md-6">
						    <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/22439234"></iframe>
                        </div>
						   </div>
						   <div class="col-md-6">
						   <h2  class="c-black">Alpha Technologies</h2>
						   <div class="post-tags">Openings For:<a href="#"> Accounts Manager (1)</a>, <a href="#">, Android Developers (13)</a>, <a href="#">SEO Expert (3)</a>
						   </div>
						    <div class="post-tags">Location:<a> Bangalore</a>
						   </div>
						    <div class="post-tags">Experience:<a href="#">  Accounts Manager - Max 8 Years</a>, <a href="#">, Android Developer - Max 2 years</a>
						   </div>
						    <div class="post-tags">Job Type:<a href="#">Full Time</a>, <a href="#">,  Day Job</a>
						   </div>
						    <div class="post-tags">Salary:<a href="#"> Accounts Manager - 8 lakh PA</a>, <a href="#">Android Developer - 4 lakh PA</a>
						   </div>
						    <div class="post-tags">Company Profile:<a> Alpha Technologies is a technology start-up founded by IIT, Mumbai alumina's Shreyas Rao and Manoj Bhatia in 2012, funded by Accel Partners, company is operational from Bangalore with current employment base of 93 members. Company is working on tech in healthcare platform with several apps helping people to have better and health life.</a>
						   </div>
						   </div>
                        </div>
                                </div>
                         
                            <div class="col-md-12">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                               
							
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-image: url(/images/parallax3.jpg) !important;background-size: cover;">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Top Profiles</span></h3>
                </div>
                
                <div id="carouselWork" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#"> <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-3.jpg" class="img-responsive"  >
                                                    </div>
                        <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                   <div class="wp-block inverse bordergrey">
                            <a href="#"> <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-1.jpg" class="img-responsive"  >
                                
                            </div>
                            <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-3.jpg" class="img-responsive"  >
                                
                            </div>
                            <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-5.jpg" class="img-responsive"  >
                                
                            </div>
                           <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								 <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-1.jpg" class="img-responsive"  >
                                
                            </div>
                          <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-2.jpg" class="img-responsive"  >
                                
                            </div>
                         <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-3.jpg" class="img-responsive"  >
                                
                            </div>
                         <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                             
							 <img alt="" src="images/prv/team/team-corporate-5.jpg" class="img-responsive"  >
                           </div>     
                          <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-1.jpg" class="img-responsive"  >
                                
                            </div>
                            <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-2.jpg" class="img-responsive"  >
                                
                            </div>
                            <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-3.jpg" class="img-responsive"  >
                                
                            </div>
                           <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                           <a href="#">  <div class="figure">
                                <img alt="" src="images/prv/team/team-corporate-5.jpg" class="img-responsive"  >
                                
                            </div>
                          <h2>Derek Shepard<small>Web Developer</small></h2>
                            	   
						   <p>6 Years <span>Bangalore</span></p></a>
                        </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
	
     <section class="slice relative bg-white bb animate-hover-slide gradient-1  has-pattern" style="background-image: url(/images/parallax1.jpg) !important;background-size: cover;">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Featured Employers</span></h3>
                </div>
                
                <div id="carouselEmployers" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselEmployers"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right" href="#carouselEmployers"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
						  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                   <div class="wp-block inverse">
                            <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								 <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
	
	    <section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-image: url(/images/parallax2.jpg) !important;background-size: cover;">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Top Consultancies</span></h3>
                </div>
                
                <div id="carouselConsultancy" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselConsultancy"><i class="fa fa-angle-left"></i></a>
                        <a data-slide="next" class="right" href="#carouselConsultancy"><i class="fa fa-angle-right"></i></a>
                    </div>
                    
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                   <div class="wp-block inverse">
                            <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								 <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                            </div>
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>

                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                        </div>
                        <div class="item">
						  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
							  <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                            <div class="row">
                               <div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
                              <div class="col-md-2">
                                    <div class="wp-block inverse"><a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
						</div>
                               
                              <div class="col-md-2">
                                    <div class="wp-block inverse">
                          <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                         <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-2.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                           <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-1.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								<div class="col-md-2">
                                    <div class="wp-block inverse">
                       <a href="#"> 
						   <div class="client">
                            <a href="#">
                                <img src="images/clients/client-3.png" alt="" >
                            </a>
                        </div>
                           </a>
                        </div>
                                </div>
								
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <style>
.wp-block.inverse small{    color: #fffefe;}
.wp-block.inverse h2, .wp-block.inverse .title {color: #fff;}
.wp-block.inverse p {color: white;}
</style>
@endsection

@section('after-scripts-end')
   <script src="/assets/app/froentend.js"></script> 
@stop