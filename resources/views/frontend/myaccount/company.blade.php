@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
              
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Myaccount</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

 <section class="slice bg-white">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    
                       
                        <ul class="categories">
                         <li ><a href="#CompanyHome" data-toggle="tab">Home</a></li>
                         <li ><a href="#CompanyProfile" data-toggle="tab">Company Profile</a></li>
			  <li ><a href="#CompanyImages" data-toggle="tab">Gallery</a></li>
                        <li ><a href="#Postnewjobs" data-toggle="tab">Post New Jobs</a></li>
                        <li ><a href="#postedjobs" data-toggle="tab">Posted Jobs</a></li>
                        <li ><a href="#ShortlistedCandidates" data-toggle="tab">Shortlisted Candidates</a></li>
                        <li ><a href="#SearchedCandidates" data-toggle="tab">Searched Candidates</a></li>
                        <li ><a href="#AppliedCandidates" data-toggle="tab">Applied Candidates</a></li>
                        <li ><a href="#ChangePassword" data-toggle="tab">Change Password</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-10">                     
                        <div class="tabs-framed">
                            <div class="tab-content">
                                  <div id="ProfileHome" >
              
                                    </div>
<div id="CompanyImage" >
              
                                    </div>
  <div class="tab-pane " id="CompanyProfile" >
                     
</div>
                                <div class="tab-pane " id="Postnewjobs">
                     </div>
  <div class="tab-pane" id="postedjobs">

</div>
<div class="tab-pane active" id="ShortlistedCandidates">
                 
</div>

<div class="tab-pane" id="SearchedCandidates">

</div>
<div class="tab-pane" id="AppliedCandidates">


</div>
<div class="tab-pane" id="EditCompanyDeatils">


</div>

<div class="tab-pane " id="ChangePassword">
     
</div>
<!-- new one -->
                             
                                
  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>                                             
    
     <script>var today = "<?php echo strtotime(date("d-m-Y")) . "000"; ?>";</script>  
@endsection

@section('after-scripts-end')

   <script type="text/javascript" src="/js/jquery.twbsPagination.js"></script>
   <script src="/assets/app/myaccount.company.js"></script>
  
@stop
