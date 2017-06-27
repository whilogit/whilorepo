@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>Employee</h2>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Employee</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 @foreach($data['profile'] as $profile)
 <script>var seekerid = "{{ $profile->seekerId }}";</script>   
<section class="slice bg-white">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray "><span class="small-line bg-magenta"></span>Introduction</h3>
                </div>  
				                  <div class="col-md-6">
								  <div class="row">
                    <div class="col-md-8"> <h2 class="text-gray margin-six-bottom margin-two-top">Hello!<br>My Name is<br>{{ $profile->firstName }} {{ $profile->lastName }}</h2> </div>  
</div> 
				 <p class="text-medium text-magenta ">{{ $profile->shortBio }}</p>
                </div>  
				                  <div class="col-md-6">
								  <img src="/companylogo.get/{{ $profile->imageCategory }}/{{ $profile->dirYear }}/{{ $profile->dirMonth }}/{{ $profile->imageName }}/{{ $profile->crTime }}/s.{{ $profile->imgExt }}" alt="" class="img-responsive" style="    width: 100%;">
                                    </div>
                   
            </div>
			</div>
        </div>
    </section>
   @endforeach 
    @foreach($data['profile'] as $profile)  
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray"><span class="small-line bg-magenta"></span>About Me</h3>
                </div>  
				                  <div class="col-md-6">
                <table>
                                            <tbody>
                                                <tr>
                                                    <td>Location:</td>
                                                    <td>{{ $profile->locationName}}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>City:</td>
                                                    <td>{{ $profile->city}}</td>
                                                </tr>
												<tr>
                                                    <td>Address:</td>
                                                    <td>{{ $profile->address }}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
									
									
				</div>  
				                  <div class="col-md-6">
								  <div class="row">
								    <table>
                                            <tbody>
                                             
                                                <tr>
                                                    <td>Pincode</td>
                                                    <td>{{ $profile->pinCode }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td>{{ $profile->Gender  == 1 ? "Male" : "Female"}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Experience Status:</td>
                                                    <td> {{ $profile->experienceName }}</td>
                                                </tr>
                                            </tbody>
                                        </table></div>
                                    </div>
                   
            </div>
			</div>
        </div>
    </section>
    @endforeach
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray "><span class="small-line bg-magenta"></span>Education</h3>
                </div>  
				                  <div class="col-md-6">
                <ul class="number-design">
                                                   
                                                   <?php $i = 0; ?>
                                                   @foreach($data['qualification'] as $qualification)    <?php $i = $i+1; ?>
                                                    <li class="margin-four-bottom xs-margin-five-bottom">
                                                        <div class="col-md-2 col-sm-2 col-xs-12 no-padding-left text-extra-large text-magenta font-weight-200 margin-3px-top xs-no-padding">{{ $i }}.</div>
                                                        <div class="col-md-10 col-sm-10 col-xs-12 xs-no-padding">
                                                            <h3 class="text-small font-weight-700 margin-5px-bottom ">{{ $qualification->qualificationName }}</h3>
                                                             <span class="text-small text-light-gray display-inline-block line-height26">{{ $qualification->specilizationName }} - {{ $qualification->courceName}}</span><br />
                                                            <span class="text-small text-light-gray display-inline-block line-height26">{{ $qualification->universityName }} - {{ $qualification->passingYear}}</span>
                                                        </div>
                                                        
                                                    </li>
                                                    <li class="devider"><hr /></li>
                                                    @endforeach
                                                </ul>
									
				</div>  
                
				                  @foreach($data['qualification'] as $qualification)
                                   <div class="col-md-2" style="border-left: 4px solid #ccc;">
								  <div class="row"><h2>Key Skills</h2>
								 <ul class="text-light-gray  margin-eight-tb sm-margin-six-bottom sm-margin-six-top Skills">
                                                       @foreach(explode(',', $qualification->keyskills) as $keyskills) 
                                                             <li>{{ $keyskills }}</li>
                                                          @endforeach
                                                      
                                                    </ul>
								  </div>
                                    </div>@break @endforeach
									
                   
            </div>
			</div>
        </div>
    </section>
    
    @foreach($data['personal'] as $personal)
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray "><span class="small-line bg-magenta"></span>Personal</h3>
                </div>  
				                  <div class="col-md-6">
                <table>
                                            <tbody>
                                                <tr>
                                                    <td>Date of Birth:</td>
                                                    <td>{{ $personal->dob }}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Marital status:</td>
                                                    <td>{{ $personal->marital == 1 ? "Yes" : "No" }}</td>
                                                </tr> 
												<tr>
                                                    <td>Willing to Relocate:</td>
                                                    <td>{{ $personal->relocate == 1 ? "Yes" : "No" }}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Shifts:</td>
                                                    <td>{{ $personal->shifts == 1 ? "Yes" : "No" }}</td>
                                                </tr>
                                                
                                                <tr>
                                                    <td>Do you have Vehicle:</td>
                                                    <td> {{ $personal->vehicle == 1 ? "Yes" : "No" }}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
									
									
				</div>  
				                  <div class="col-md-6">
								  <div class="row">
								    <table>
                                            <tbody>
                                             
                                                <tr>
                                                    <td>Adharcard: </td>
                                                    <td>{{ $personal->adharcard }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Pancard:</td>
                                                    <td>{{ $personal->pancard }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Passport:</td>
                                                    <td> {{ $personal->passport }}</td>
                                                </tr>
                                            </tbody>
                                        </table></div>
                                    </div>
                   
            </div>
			</div>
        </div>
    </section>
    @endforeach
    
   <?php if(isset($_SESSION['WHILLO']['COMPAnyID'])){ ?> 
    @if(!$data['permission'])
    <section class="slice bg-white">
        <div class="wp-section user-account">
            <div class="container"><div class="row">
                <div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="requesttopermission"><h2>Request to Full Details <i class="fa fa-long-arrow-right text-white"></i></h2></div>
				</div>				
			</div>
        </div>
    </section>
    @endif
     <?php } ?>
     @if($data['permission'])
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
				<div class="col-md-12">
                 <h3 class="text-gray"><span class="small-line bg-magenta"></span>My Contact Details</h3>
                </div> 
                  <div class="row">
                      <div class="col-md-12">
                        <div class="vcard_block contact_table_block">
                             @foreach($data['profile'] as $profile)  
                              <table>
                                <tbody>
                                  <tr>
                                    <td class="font_weight_m">E-mail:</td>
                                    <td class="text_right">{{ $profile->emailAddress }}</td>
                                    
                                  </tr>
                                  <tr>
                                    <td class="font_weight_m">Mobile:</td>
                                    <td class="text_right">{{ $profile->mobileNumber }}</td>
                                   </tr>
                                  
                                </tbody>
                              </table>
                             @endforeach 
                        </div>
                      </div>
                    </div>         
				                 
                   
            </div>
			</div>
        </div>
    </section>
    
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray"><span class="small-line bg-magenta"></span>My Professional Documents</h3>
                </div>  
				                
				                 <div class="row">
                                 @foreach($data['documents'] as $documents)
                       @if($documents->documentId == 1) <div class="col-md-12"><span> {{ $documents->documentName  }}</span> - <a>{{ $documents->actualName }}</a></div>@endif
                        
				@endforeach
                </div>	
                   
            </div>
			<div class="row newbg">
                  <div class="col-md-12">
                 <h3 class="text-gray"><span class="small-line bg-magenta"></span>My Educational Documents</h3>
                </div>  
				      <div class="col-md-12"></div>           
				                 <div class="row">
               @foreach($data['documents'] as $documents)
                       @if($documents->documentId == 2) <div class="col-md-12"><span> {{ $documents->documentName  }}</span> - <a>{{ $documents->actualName }}</a></div>@endif
                        
				@endforeach
				</div>	
                   
            </div>
			</div>
        </div>
    </section>
    
    <section class="slice bg-grey">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row newbg">
                   
				      <div class="col-md-6">
					  
               					 <div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="downloaderesume"><h2> Download Resume <i class="fa fa-long-arrow-right text-white"></i></h2></div>
						
					  </div>
                      
                     
                      
                      <div class="col-md-6">
					  
               					@if(!$data['favorite']) <div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="addtofavarite"><h2> Add to favorite <i class="fa fa-long-arrow-right text-white"></i></h2></div>
                                
								@else 
                                <div class=" btn small-btn link-button highlight-button-magenta col-md-12" name="removefavarite"><h2>Remove favorite <i class="fa fa-long-arrow-right text-white"></i></h2></div>
                                @endif						
					  </div>            
				            
                                 
                   
            </div>
			</div>
        </div>
    </section>
    
    @endif

<style>
	   figure {
    margin: 0;
}
.slide-title {
    -ms-transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    width: 562%;
    margin-left: 0;
  
    left: -236%;
    position: absolute;

}
.small-line {
    width: 28px;
    height: 6px;
    display: inline-block;
    margin-right: 7px;
}
.bg-magenta {
    background-color: #ff486e;
}
.text-magenta {
    color: #ff486e !important;
}
.text-medium {
    font-size: 20px !important;
    line-height: 32px !important;
}
.newbg{border: 18px solid #ccc;
    padding: 2%;}
	caption, th, td {
    text-align: left;
    vertical-align: inherit;
    font-size: 20px;padding:27px 0;
}
.highlight-button-magenta:hover {
    background-color: #2e353b;
    color: #fff;
}
.highlight-button-magenta, .highlight-button-magenta:focus {
    background-color: #ff486e;
    color: #fff;
}
.padnew{    padding: 10%;
    margin: 2%;}
	.text-extra-large {
    font-size: 40px !important;
    line-height: 44px !important;
}
.margin-eight-tb {
    margin-top: 8% !important;
    margin-bottom: 8% !important;
}
.Skills li:before {
    content: "_";
    color: #ff486e;
    font-weight: 700;
    left: 0;
    margin-left: 0;
    position: absolute;
    top: -7px;
}
.Skills li {
    padding: 0 0 0 20px;
    margin: 0 0 8px 0;
    position: relative;FONT-SIZE: 18PX;
}
.text-light-gray {
    color: #8f8f8f !important;
}
.year-design mark {
    display: block;
    line-height: normal;
}
mark {
    font-size: 12px;
    font-weight: 700;
    padding: 3px 10px 0;
    color: #fff;
    text-align: center;
    letter-spacing: 1px !important;
}
.year-design h3 {
    line-height: 22px !important;
}
.text-small {
    font-size: 16px !important;
    line-height: 26px !important;
}
	   </style>
      <!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}


/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

</style>

   
@endsection

@section('after-scripts-end')
  
   <script src="/assets/app/resume.permession.js"></script>
  
@stop