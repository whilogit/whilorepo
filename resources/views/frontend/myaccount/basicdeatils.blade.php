@section('content')
   <div class="pg-opt">
        <div class="container">
	<div class="row">
		<h2></h2>
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Company Plan  Details</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"><img width="100%" src="{{ URL::to('/') }}/app/Storage/Images/{{ $company_logo->logoCategory }}/{{ $company_logo->dirYear }}/{{ $company_logo->dirMonth }}/{{ $company_logo->dirYear }}_{{ $company_logo->dirMonth }}_{{ $company_logo->crTime }}_{{ $company_logo->logoName }}_l.{{ $company_logo->logExt }}" alt="Featured Image" class="img-circle" kasperskylab_antibanner="on"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
  </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">{{ $commaster->userName }}</h4></span>
              <span><p>@if($commaster->ctypeId == '1')
                   
                       Company
                  
                      @else
                      Consultancy
                       </p></span>  
            @endif
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">

    
              
<div class="col-sm-5 col-xs-6 tital " >Plan Name</div><div class="col-sm-7 col-xs-6 ">{{ $plandeatils->planname }}</div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Plan Start Date</div><div class="col-sm-7"> {{ $startdate }} </div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Plan Expiry Date</div><div class="col-sm-7"> {{ $expirydate}}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Amount</div><div class="col-sm-7">Rs.{{ $plandeatils->price }}</div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Duration</div><div class="col-sm-7">{{ $plandeatils->duration }} Days</div>
 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >No of Jobs Per Day</div><div class="col-sm-7">{{ $plandeatils->job_post_limit }}</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >No of CV Access Per Day</div><div class="col-sm-7">{{ $plandeatils->cv_access_per_day }}</div>




            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  

       
       
       
       
       
       
       
       
   </div>
</div>
<style>
                  input.hidden {
    position: absolute;
    left: -9999px;
}
h2
{
    margin-left: 10px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
</style>




         