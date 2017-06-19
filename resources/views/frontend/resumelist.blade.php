@extends('frontend.layouts.master')

@section('content')
<section class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #217dbb !important; margin-top:5%">
        <div class="wp-section">
            <div class="container">

       
            <form class="form-light ">
			
                <div class="col-md-8 col-md-offset-2 pb-20 pt-20">  <!-- style="background: hsla(0, 100%, 100%, 0.34);box-shadow: 0px 0px 12px 1px hsla(0, 100%, 100%, 0.34);" -->
				 <div class="section-title-wr">
                <h3 class="section-title center">
                    <span class="c-white">TALENT SEARCH</span>
                    
                </h3>
            </div>
                     <div class="col-md-6">
                                <div class="form-group form-group-lg">
                                    <label  class="c-white">Keywords</label>
                                    <input type="text" class="form-control input-lg" placeholder="Eg.Webdesign,Java,C#,etc ...">
                                </div>
                            </div>
                    <div class="col-md-6">
                                <div class="form-group form-group-lg">
                                    <label  class="c-white">Location</label>
                                    <input type="text" class="form-control input-lg" placeholder="Eg.Bangalore,Mysore,etc ...">
                                </div>
                            </div>
              <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="#" class="btn btn-lg btn-dark form-control1" title="">
                            <span>SEARCH</span>
                        </a>
                    </div>
					
                </div>   
				</div>      
            </form>
</div>
</div>
</section>

@foreach($data['industry'] as $industry)
	@if(count($data[$industry->industryId]) > 0)
        <section id="{{ $industry->industryId }}" class="slice relative bg-white bb animate-hover-slide has-pattern" style="background-color: #7a3fa8 !important;">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>{{ $industry->industryName }}</span></h3>
                </div>
                
                <div id="carouselWork{{ $industry->industryId }}" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-nav">
                        <a data-slide="prev" class="left" href="#carouselWork{{$industry->industryId }}"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                        <a data-slide="next" class="right" href="#carouselWork{{ $industry->industryId }}"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner"><?php $incr = 0; $class = "active"; ?>
                   @foreach($data[$industry->industryId] as $resume)
                    <?php $incr++;  ?>
                       <?php if($incr == 1){  echo '<div class="item ' . $class . '"><div class="row">';  }?>
                            
                                <div class="col-md-2">
                                    <div class="wp-block inverse bordergrey">
                                       <a target="_blank" href="/talentdetails/{{ $resume->seekerId }}/{{ $resume->firstName }}"> <div class="figure"><img  style="width:100%;height:150px" alt="" src=@if($resume->imageCategory != "") "/display/image/{{ $resume->imageCategory }}/{{ $resume->dirYear }}/{{ $resume->dirMonth }}/{{ $resume->imageName }}/{{ $resume->crTime }}/s.{{ $resume->imgExt }}" @else "http://www.oldpotterybarn.co.uk/wp-content/uploads/2015/06/default-medium.png" @endif class="img-responsive"></div>
                                      <h2>{{ $resume->firstName }} {{ $resume->lastName }}<small>Location: {{ $resume->locationName }}</small></h2><p>{{ $resume->experienceName }}</span></p></a></div>
                                </div>
                               
                           <?php if($incr == 6){ echo '</div></div>'; } if($incr == 6) $incr = 0; ?>
                       <?php $class = "";?>
                       @endforeach
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
    @endif
@endforeach    
@endsection

@section('after-scripts-end')
  
   <script src="/assets/app/conpany.joblist.js"></script>
  
@stop