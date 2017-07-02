@extends('frontend.layouts.master')

@section('content')
<section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #217dbb !important; margin-top:5%">
        <div class="wp-section">
            <div class="container">

       
            <form class="form-light " name="search">
			
                <div class="col-md-8 col-md-offset-2 pb-20 pt-20">  <!-- style="background: hsla(0, 100%, 100%, 0.34);box-shadow: 0px 0px 12px 1px hsla(0, 100%, 100%, 0.34);" -->
				 <div class="section-title-wr">
                <h3 class="section-title center">
                    <span class="c-white">TALENT SEARCH</span>
                    
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

<section id="" class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #7a3fa8 !important;">
        <div class="wp-section">
            <div class="container">
                
                
                
                      <ul class="list-listings-2" name="joblist">
                   <?php $incr = 0; $class = "active"; ?>
                   @foreach($data as $resume)
                    <?php $incr++;  ?>
                       <?php if($incr == 1){  echo '<div class="item ' . $class . '"><div class="row">';  }?>
                            
                               
    <div class="col-md-2">
                                    
<div class="wp-block inverse bordergrey">
                                       <a target="_blank" href="/talentdetails/{{ $resume->seekerId }}/{{ $resume->firstName }}">
 <div class="figure">
<img  style="width:100%;height:150px" alt="" src=@if($resume->imageCategory != "") "/display/image/{{ $resume->imageCategory }}/{{ $resume->dirYear }}/{{ $resume->dirMonth }}/{{ $resume->imageName }}/{{ $resume->crTime }}/s.{{ $resume->imgExt }}" @else "http://www.oldpotterybarn.co.uk/wp-content/uploads/2015/06/default-medium.png" @endif class="img-responsive"></div>

                                      <h2>{{ $resume->firstName }} {{ $resume->lastName }}<small>Location: {{ $resume->locationName }}</small></h2><p>{{ $resume->experienceName }}</p></a>

</div>
                                </div>

                               
                           <?php if($incr == 6){ echo '</div></div>'; } if($incr == 6) $incr = 0; ?>
                       <?php $class = "";?>
                       @endforeach
                      </ul>
 <!-- BOTTOM PAGINATION -->
                        
                </div>  

            </div>
       
    </section> 
<div class="wp-block default product-list-filters light-gray">
                            <div class="filter sort-filter">
                                <div class="form-inline form-light">
                                    <ul name="myjobstotalpage" class="pagination-sm pagination"><li class="disabled"><a>Page  / <b>1</b></a></li></ul>
                                    
                                </div>
                            </div>
                            <ul class="pagination pagination" name="jobslisttotalpage">
                               
                            </ul>
                        </div>
@endsection

@section('after-scripts-end')
<script type="text/javascript">
 var url = "<?php echo url('/'); ?>";
</script>
   <script src="/assets/app/talent.js"></script> 
     <script type="text/javascript" src="/js/jquery.twbsPagination.js"></script>
   <script src="/assets/app/conpany.talent.js"></script>
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
