@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2> @foreach ($data['myjobs']['profile'] as $details) {{ $details }} @endforeach</h2>
                </div>
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
                      
                       <div class="user-profile-img">
                       @foreach ($data['myjobs']['logo'] as $list)
                           <img src="<?php echo $list->logoCategory == "" ? "" : "companylogo.get/" ?>{{ $list->logoCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->logoName }}/{{ $list->crTime }}/s.{{ $list->logExt }}" class="img-responsive" style="width:100%">
						  @endforeach
                        </div>
                       
                        <ul class="categories">
                         <li ><a href="#CompanyProfile" data-toggle="tab">Company Profile</a></li>
<li ><a href="#Postnewjobs" data-toggle="tab">Post New Jobs</a></li>
<li ><a href="#postedjobs" data-toggle="tab">Posted Jobs</a></li>
<li ><a href="#ShortlistedCandidates" data-toggle="tab">Shortlisted Candidates</a></li>
<li ><a href="#SearchedCandidates" data-toggle="tab">Searched Candidates</a></li>
<li ><a href="#AppliedCandidates" data-toggle="tab">Applied Candidates</a></li>
<li  class="active"><a href="#ChangePassword" data-toggle="tab">Change Password</a></li>

                            
                        </ul>
                    </div>
                    <div class="col-md-10">                     
                        <div class="tabs-framed">
                            <div class="tab-content">
  <div class="tab-pane " id="CompanyProfile" >
                     
</div>
                                <div class="tab-pane " id="Postnewjobs">
                     </div>
  <div class="tab-pane" id="postedjobs">

</div>
<div class="tab-pane active" id="ShortlistedCandidates">
<h4>Shortlisted Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>Status</th></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><select><option>Selected</option><option>Rejected</option></select></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><select><option>Selected</option><option>Rejected</option></select></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><select><option>Selected</option><option>Rejected</option></select></td></tr>
</tbody>
</table>                        
</div>

<div class="tab-pane" id="SearchedCandidates">
<div class="col-md-12">
                        <h4>Searched Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Called For Interview</a></td></tr>
</tbody>
</table>                 
                         
                     
</div>
</div>
<div class="tab-pane" id="AppliedCandidates">
<div class="col-md-12">
<h4>Applied Candidates</h4>
        <table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Job Title</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
<tr><td><a href="#">Nidhi</a></td><td>Tester</td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>Tester</td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>Tester</td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
<tr><td><a href="#">Nidhi</a></td><td>Tester</td><td>BE</td><td>3 Years</td><td><a href="">View</a></td><td><a href="">Called For Interview</a></td></tr>
</tbody>
</table>                     
                         
                       
                    </div>

</div>

<div class="tab-pane " id="ChangePassword">
<div class="col-md-6 col-md-offset-2 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form"> 
                            <div class="form-header">
                                <h2>Change your Password</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Enter Current Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Enter New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
 <section>
                                            <div class="form-group">
                                                <label class="label">Confirm New Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock" aria-hidden="true"></i>
                                                    <input type="password" name="Password">
                                                </label>
                                            </div>     
                                        </section> 
                                        
                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Change Password</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>    
                            </div>
                         
                        </div>
                    </div>

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
   <script>
        var sitUrl = '<?php echo url('/'); ?>';
   </script>
   <script src="/assets/app/myaccount.company.js"></script>
    @if ($data['myjobs']['count'] > 1)
     <script>
	 $(function(){ 
		
	
	 $('[name=myjobspagination]').twbsPagination({
        totalPages: "{{ $data['count'] }}",
        visiblePages: 7,
        onPageClick: function (event, page) { 
		   $('[name=myjobstotalpage] li a b').html(page); 
            $.companyacount.paginationmyjobs(page);
        }
    });
   })(jQuery); </script>@endif
   
@stop