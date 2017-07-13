<?php
	$billingName 	= $info['billing_name'];
	$billingAddress = $info['billing_address'];
	$billingCity 	= $info['billing_city'];
	$billingState 	= $info['billing_state'];
	$billingZip 	= $info['billing_zip'];
	$billingCountry	= $info['billing_country'];
	$billingEmail	= $info['billing_email'];
	$orderId	= $info['order_id'];
	$trackingId	= $info['tracking_id'];
	$planName	= $info['plan_name'];
	$duration	= $info['duration'];
	$jobPostlimit	= $info['job_post_limit'];
	$price		= $info['price'];
	$cvAccessPerDay = $info['cv_access_per_day'];
	$serarchCriteria= $info['search_criterion'];
	$createdDate    = $info['createdDate'];
	$planexpiry     =$info['planexpiry'];
?>

<div style="margin-left:20%; margin-top:5%; float:left; width:775px; box-shadow:0 0 3px #aaa; height:auto;color:#666;">
   <div style="width:100%; float:left; background:#1ca8dd; color:#fff; font-size:30px; text-align:center;">
	Thank you.Your payment was successful
   </div>
    <div style="width:100%; padding:0px 0px;border-bottom:1px solid rgba(0,0,0,0.2);float:left;">
        <div style="width:45%; float:left;padding:10px;">
		
			<span style="font-size:14px;float:left; width:100%;">{{ $billingName }}</span>                          
			<span style="font-size:14px;float:left;width:100%;">{{ $billingAddress }}  </span>
			<span style="font-size:14px;float:left;width:100%;">{{ $billingCity }} </span>
			<span style="font-size:14px;float:left;width:100%;">{{ $billingState }}</span>
			<span style="font-size:14px;float:left;width:100%;">{{ $billingZip }}</span>
			<span style="font-size:14px;float:left;width:100%;">{{ $billingCountry }} </span>
			<span style="font-size:14px;float:left;width:100%;">{{ $billingEmail }}</span>
		
        </div>
		
        <div style="width:49%; float:right;padding:">
            <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
                <b>Order Id : </b>{{ $orderId }}	
            </span>
			<span style="font-size:14px;float:right;  padding:10px; text-align:right;">
               <b>Tracking id : </b> {{ $trackingId }}
            </span>
        </div>
    </div>
    


    
    
    <div style="width:100%; padding:0px; float:left;">
     
          <div style="width:100%;float:left;background:#efefef;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;font-weight:600;">
            Decription
           </span>
         <span style="font-weight:600;float:left;padding:10px ;width:40%;color:#888;text-align:right;">

        </span>
      </div>
	  
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Plan Type:
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            {{ $planName }}	
        </span>
      </div>
 <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Duration
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            {{ $duration }} Days
        </span>
      </div>
 <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Job Post Limit             
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
            {{ $jobPostlimit }}	
        </span>
      </div>
 <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
         CV Access Per Day
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">            
		{{ $cvAccessPerDay }}	
        </span>
      </div>
	  	  

    </div>
 	<div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
        Search Criterion
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
		{{ $serarchCriteria }}
        </span>
      </div>

 	<div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
        Plan Started Date
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
		{{ $createdDate }}
        </span>
      </div>

 	<div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
        Plan Expiry Date
          
   
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
		{{ $planexpiry }}
        </span>
      </div>
	  	  

  
  <div style="width:100%;float:left; background:#fff;">
           
         <span style="font-weight:600;float:right;padding:10px 0px;width:40%;color:#666;text-align:center;">
           Total Amount :  Rs.{{ $price }}
        </span>
 	 </div>

	
	<div style="width:100%;float:left; background:#fff;">           
         <span style="font-weight:600;float:left ;padding:10px 0px;width:25%;color:#666;text-align:center;">
           <a href="/company/image_upload_page" class="btn btn-book-now"><i class="fa fa-check-circle" aria-hidden="true"></i><b>Next Step</a>
        </span>
 	 </div>
	</div>
      </div>
</body>


	
</html>



     

