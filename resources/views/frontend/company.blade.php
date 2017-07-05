@extends('frontend.layouts.master')
@section('content')
<section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #217dbb !important; margin-top:5%">
        <div class="wp-section">
            <div class="container">

       
            <form class="form-light" name="search">
			
                <div class="col-md-8 col-md-offset-2 pb-20 pt-20">  <!-- style="background: hsla(0, 100%, 100%, 0.34);box-shadow: 0px 0px 12px 1px hsla(0, 100%, 100%, 0.34);" -->
				 <div class="section-title-wr">
                <h3 class="section-title center">
                    <span class="c-white">SEARCH YOUR DREAM JOB</span>
                    
                </h3>
            </div>
                     <div class="col-md-6">
                                <div class="form-group form-group-lg">
                                    <label class="c-white">KEYWORDS</label>
                                    <input type="text" class="form-control input-lg" required="required" name="keyword" placeholder="Eg.Webdesign,Java,C#,etc ...">
                                </div>
                            </div>
                    <div class="col-md-6">
                                <div class="form-group form-group-lg">
                                    <label  class="c-white">Location</label>
                                    
									<select type="text" class="form-control input-lg" required="required" name="locations"><option value="">-Locations-</option>
                                     @foreach ($locations as $location)
                                                  <option  value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                     @endforeach
                                    </select>
                                </div>
                            </div>
              <div class="row">
                    <div class="col-md-12 text-center">
                        <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg" title="">
                            <span class="c-white">SEARCH</span>
                        </a>
                    </div>
					
                </div>   
				</div>      
            </form>
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
                       <?php $i=0; 
                              $result = array(); ?>

  
                          @foreach($data as $datas)
                      
                             
                        <div class="item <?php if($i==0){echo 'active';} ?>">
                             <?php $i++;?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wp-block inverse">
                           <div class="col-md-6">
						    <div class="embed-responsive embed-responsive-16by9">
                           <!-- <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/22439234"></iframe>-->
                            @if(($datas->logoCategory != "")&&($datas->logoName))
                                                        <img src="<?php echo url('/'); ?>/companylogo.get/"{{ $datas->logoCategory }}/{{ $datas->dirYear }}/{{ $datas->dirMonth }}/{{ $datas->logoName }}/{{ $datas->crTime }}/s.{{ $datas->logExt }}" class="img-responsive" style="width:1000%"  alt="{{ $datas->companyName }}">
                       @else
 <img src="<?php echo url('/'); ?>/images/download.png" alt="" >
    @endif
                                                    </div>
						   </div>
						   <div class="col-md-6">
						   <h2 class="c-black">{{$datas->companyName}}</h2>
						   
                                                     <div class="post-tags">Openings For:
                                                  <?php  $jobtitle = explode(",",  $datas->jobtitle);
$jobid = explode(",", $datas->jobid);?>
 
   <?php for($i=0; $i<count($jobtitle); $i++)
     { ?>
                                                         <a href="jobdetails/<?php echo $jobid[$i];?>/<?php echo $jobtitle[$i];?>">
<?php echo $jobtitle[$i];?>
      </a>                                                  
 <?php }
?>
     
						   </div>
						    <div class="post-tags">Location:<a>{{$datas->locationName}}</a>
						   </div>
						    <div class="post-tags">Experience: @foreach (explode(', ', $datas->expname) as $expname)
                                                       <a href="#">
                                                    {{$expname}}           
                                                    </a>@endforeach
						   </div>
						    <div class="post-tags">Job Type:<a href="#">@foreach (explode(', ', $datas->emplmode) as $emplmode)
                                                       <a href="#">
                                                    {{$emplmode}}           
                                                    </a>@endforeach
						   </div>
						   
						    <div class="post-tags">Salary:<a href="#">@foreach (explode(', ', $datas->salary) as $salary)
                                                       <a href="#">
                                                    {{$salary}}           
                                                    </a>@endforeach
						   </div>
                                                   <div class="post-tags">Company Profile:<a>{{$datas->shortDescription}}</a>
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
                         
                      @endforeach
                 
                    </div>
                </div>  
            </div>
        </div>
    </section>
@endsection

@section('after-scripts-end')
   <script src="/assets/app/froentend_company.js"></script> 
   <script type="text/javascript" src="/js/jquery.twbsPagination.js"></script>
   <script src="/assets/app/conpany.companylist.js"></script>
   @if ($count > 1)
     <script>
	 $(function(){ 
	 $('[name=jobslisttotalpage]').twbsPagination({
        totalPages: "{{ $count }}",
        visiblePages: 7,
        onPageClick: function (event, page) { 
		   $('[name=myjobstotalpage] li a b').html(page); 
            $.joblist.paginationjoblist(page);
        }
    });
   })(jQuery); </script>@endif
@stop