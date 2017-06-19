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
    <br />
    <section class="slice bg-white no-padding">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        
                        <ul class="list-listings-2" name="joblist">
                        
                         @foreach ($joblist as $list)
                            <li class="featured" id="{{ $list->jobId }}" style="box-shadow: 0 10px 6px -6px #777">
                               <div class="listing-header bg-base">{{ $list->companyName }}</div>
                                 <div class="listing-image">                                  
                                     <img src="/<?php echo $list->logoCategory == "" ? "" : "companylogo.get/" ?>{{ $list->logoCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->logoName }}/{{ $list->crTime }}/s.{{ $list->logExt }}" class="img-responsive" style="width:100%"  alt="{{ $list->companyName }}">
                                                                            
                                   
                                    <a href="/jobdetails/{{ $list->jobId }}/<?php echo str_replace(" ", "-",$list->jobTitle) ?>" class="btn btn-lg btn-square btn-light btn-block-bm btn-icon">See more</a>
                                </div>
                                <div class="cell">
                                    <div class="listing-body clearfix">
                                        <h3><a href="/jobdetails/{{ $list->jobId }}/<?php echo str_replace(" ", "-",$list->jobTitle) ?>">{{ $list->jobTitle }}</a></h3>
                                       <h4>{{ $list->jobTitle }}.</h4> 
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
                    
                        
                    
                </div>
            </div>
        </div>
    </section>   
@endsection

@section('after-scripts-end')
   <script type="text/javascript" src="/js/jquery.twbsPagination.js"></script>
   <script src="/assets/app/conpany.joblist.js"></script>
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