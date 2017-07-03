@extends('frontend.layouts.master')

@section('content')
 <div class="pg-opt" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Job list</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb"><li><a href="/">Home</a></li><li class="active">Job list</li></ol>
                </div>
            </div>
        </div>
    </div>
 
   <section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #217dbb !important;">
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
<a href="#" class="form-control1" title="">
                            <span>ADVANCED SEARCH</span>
                        </a>
                    </div>
					
                </div>   
				</div>      
            </form>

</div>
</div>
</section>
    <section class="slice bg-white no-padding" >
        <div class="wp-section">
            <div class="container"><br/>
 <div class="row"> <div class="col-md-12"><h6>{{$count}} @if($keyword){{$keyword}} @endif
             Results for HTML Developer</h6></div></div>

                <div class="row">
 
                    <div class="col-md-9">
                        
                        <ul class="list-listings-2" name="joblist">
                        
                         @foreach ($joblist as $list)
                            <li class="featured" id="{{ $list->jobId }}" style="box-shadow: 0 10px 6px -6px #777">
                               <div class="listing-header bg-base">{{ $list->companyName }}</div>
                                 <div class="col-md-2">                                  
<a href="/companydetails/{{ $list->jobId }}/<?php echo str_replace(" ", "-",$list->jobTitle) ?>"> 
   @if(($list->logoCategory != "")&&($list->logoName))
    <img src="/<?php echo $list->logoCategory == "" ? "" : "companylogo.get/" ?>{{ $list->logoCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->logoName }}/{{ $list->crTime }}/s.{{ $list->logExt }}" class="img-responsive" style="width:100%"  alt="{{ $list->companyName }}">
@else
 <img src="<?php echo url('/'); ?>/images/download.png" alt="" >
    @endif

</a>                                                               
                                   
                            <!--        <a href="/jobdetails/{{ $list->jobId }}/<?php echo str_replace(" ", "-",$list->jobTitle) ?>" class="btn btn-lg btn-square btn-light btn-block-bm btn-icon">See more</a>  -->
                                </div>
                                <div class="col-md-10">
                                    <div>
                                        <h5><a href="/companydetails/{{ $list->jobId }}/<?php echo str_replace(" ", "-",$list->jobTitle) ?>">{{ $list->jobTitle }}</a></h5>
                                       <p>{{ $list->jobTitle }}.</p> 
                                    </div>
                                    <div class="listing-footer">
                                        <ul class="aux-info">
                                            <li><i class="fa fa-calendar"></i><strong>Created Date:</strong> <?php echo date("d-M Y",strtotime($list->createdDate)) ?></li>
                                            <li><i class="fa fa-inbox"></i><strong>Job Type:</strong> {{ $list->employmentmodeName }}</li>
                                            <li><i class="fa fa-globe"></i><strong>Location:</strong> {{ $list->locationName }}</li>
                                        </ul>
                                    </div>
                                </div> 
                            </li>
                            @endforeach
                           
                        </ul>

                          <!-- BOTTOM PAGINATION -->
                        <div class="wp-block default product-list-filters light-gray">
                            <div class="filter sort-filter">
                                <div class="form-inline form-light">
                                    <ul name="myjobstotalpage" class="pagination-sm pagination"><li class="disabled"><a>Page {{ $count }} / <b>1</b></a></li></ul>
                                    
                                </div>
                            </div>
                            <ul class="pagination pagination" name="jobslisttotalpage">
                               
                            </ul>
                        </div>
                    </div>
                   
                    
                   	                    <div class="col-md-3">  <section class="slice relative bg-white bb animate-hover-slide gradient-1  has-pattern" style="background-image: url(/images/parallax1.jpg) !important;background-size: cover;">		
        <div class="wp-section">		
            <div class="col-md-12">		
                <div class="section-title-wr">		
                    <h3 class="section-title left"><span>Featured Employers</span></h3>		
                </div>		
                		
                <div id="carouselEmployers" class="carousel carousel-3 slide animate-hover-slide">		
                 		
                    		                    
                    <!-- Wrapper for slides -->		
                    <div class="carousel-inner">		
                        <div class="item active">		
						  <div class="row">		
                               <div class="col-md-12">		
                                    <div class="wp-block inverse">		
                           <a href="#"> 		
						   <div class="client">		
                            <a href="#">		
                                <img src="<?php echo url('/'); ?>/images/clients/client-2.png" alt="" >		
                            </a>		
                        </div>		
                           </a>		
                        </div>		
                                </div>		
                         		
								<div class="col-md-12">		
                                    <div class="wp-block inverse">		
                         <a href="#"> 		
						   <div class="client">		
                            <a href="#">		
                                <img src="<?php echo url('/'); ?>/images/clients/client-2.png" alt="" >		
                            </a>		
                        </div>		
                           </a>		
                        </div>		
                                </div>		
								<div class="col-md-12">		
                                    <div class="wp-block inverse">		
                           <a href="#"> 		
						   <div class="client">		
                            <a href="#">		
                                <img src="<?php echo url('/'); ?>/images/clients/client-1.png" alt="" >		
                            </a>		
                        </div>		
                           </a>		
                        </div>		
                                </div>		
								<div class="col-md-12">		
                                    <div class="wp-block inverse">		
                       <a href="#"> 		
						   <div class="client">		
                            <a href="#">		
                                <img src="<?php echo url('/'); ?>/images/clients/client-3.png" alt="" >		
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
    </section>		
</div>     
                 </div>   
                </div>
            </div>
        </div>
    </section>   
@endsection


    <style>
.wp-block.inverse small{    color: #fffefe;}
.wp-block.inverse h2, .wp-block.inverse .title {color: #fff;}
.wp-block.inverse p {color: white;}
</style>


@section('after-scripts-end')
<script type="text/javascript">
 var url = "<?php echo url('/'); ?>";
</script>
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