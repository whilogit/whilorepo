@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Proffessional Details</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Proffessional Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="slice bg-white">
        <div class="wp-section shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Checkout process - Progress bar -->
                        <ol class="progtrckr hidden-xs" data-progtrckr-steps="5">
                           
					<li class="progtrckr-done">Educational Details</li>
                    <li class="progtrckr-done">Personal Details</li>
                    <li class="progtrckr-done">Proffessional Details</li>
                    <li class="progtrckr-todo">Upload Documents</li>
                    <li class="progtrckr-todo">Post and Share</li>
                        </ol>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="wp-block default user-form">    
                                    <div class="form-header">
                                        <h2>Proffessional Details</h2>
                                    </div>
                                    <div class="form-body">
                                        <form name="proffessional" class="sky-form">                                    
                                            <fieldset class="no-padding">    
                                                <section>
                                                
                                                <section> 
                                                <hr>            
                                                <section>
                                                    <div class="row">
                                                      <div class="col-xs-6">
                                                             <div class="form-group">
                                                        <label class="label">Current Industry</label>
                                                           <label class="select"> <i class="icon-append fa fa-date"></i>
                                                    <select name="industry" required="required"><option value=""  selected="selected" disabled="disabled">-Select Industry-</option>
                                                    @foreach($industry as $list)
                                                    <option {{ isset($proffessional->industryId) ? $proffessional->industryId == $list->industryId ? "selected" : "" : ""  }} value="{{ $list->industryId }}">{{ $list->industryName }}</option>
                                                    @endforeach
                                                    </select>
                                                   
                                                </label>
                                                    </div>               
                                                        </div>
														
														
														<div class="col-xs-6">
                                                             <div class="form-group">
                                                        <label class="label">Functional Area</label>
                                                           <label class="select">
                                                 <select name="functionalarea">
                                                        <option value="0" selected="" disabled="">Functional Area</option>
                                                          @foreach($functionalarea as $list)
                                                    <option {{ isset($list->functionalId) ? $list->functionalId == $list->functionalId ? "selected" : "" : ""  }} value="{{ $list->functionalId }}">{{ $list->functionalName }}</option>
                                                    @endforeach                                             
                                                    </select>
                                                    <i></i>
                                                </label>
                                                    </div>               
                                                        </div>
                                                        
                                                        <div class="col-xs-6">
                                                             <div class="form-group">
                                                        <label class="label">Are you a?</label>
                                                           <label class="select">
                                                    <select name="expiriencestatus" required="required">
                                                        <option value="" selected="" disabled="">-Select-</option>
                                                        <option {{ isset($proffessional->exprstatus) ?  $proffessional->exprstatus == 1 ? "selected" : '' : '' }} value="1">Fresher</option>
                                                        <option  {{ isset($proffessional->exprstatus) ?  $proffessional->exprstatus == 2 ? "selected" : '' : '' }} value="2">Expirienced</option>
                                                   </select>
                                                    <i></i>
                                                </label>
                                                    </div> 

<ul class="list-listings-2 newqualification">
                                                              		<li class="featured" style="margin-bottom:0px;margin-top:35px;">
                                <div class="listing-header bg-base">
                                Preferred location	</div>
                               <fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important">    
                                    	<section>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                       
                                                           <label class="select">
                                                             
                                                              <select multiple="multiple" size="5" name="preferredlocation" style="display: none;">
                                                             @foreach($locations as $location)
                                                              <option  value="{{ $location->	locationId }}"> {{ $location->locationName }}</option>
                                                              @endforeach
                                                              </select>
                                                            </label>
                                                    </div>               
                                                </div>
											</div>  
										</section>
                                                                              
                                    </fieldset>
                                 
                            </li>
                                  </ul> 
													
                                                        </div>
                                                        
                                                        <div class="col-xs-6">
                                                               <ul class="list-listings-2 currentstatus">
                                                              		
                                  </ul>   
                                  
                                  
                                  <script type="text/template" name="tmplt_curentstatus">
								 <li class="featured" style="margin-bottom:-17px;margin-top:20px;">
                                <div class="listing-header bg-base">
                                Current status</div>
                               <fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important">    
                                    	<section>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Are you a <span style="color:red">*</span></label>
                                                           <label class="select">
                                                               <select name="currentstatus" required="required">
                                                                    <option value="" selected="" disabled="">-Select-</option>
                                                                    <option {{ isset($proffessional->currentstatus) ?  $proffessional->currentstatus == 1 ? "selected" : '' : '' }} value="1">Resigned - Not in job</option>
                                                                    <option {{ isset($proffessional->currentstatus) ?  $proffessional->currentstatus == 2 ? "selected" : '' : '' }} value="2">Resigned - Serving notice period</option>
                                                                    <option {{ isset($proffessional->currentstatus) ?  $proffessional->currentstatus == 3 ? "selected" : '' : '' }} value="3">Not Resigned - Searching for a job</option>
                                                        </select>
                                                    <i></i>
                                                            </label>
                                                    </div>               
                                                </div>
                                                <div class="emaillist"><?php $i = 0; ?>
                                                @foreach ($feedbackemails as $feedbackemail)<?php $i++; ?>
                                                <div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Email address {{ $i }}</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="email1" placeholder="Email address 1" value="{{ $feedbackemail->EmailId }}"> </label> </div></div>
                                                @endforeach
                                                </div>
												 
											</div>  
										</section>
                                                                              
                                    </fieldset>
                                 
                            </li>
							
							
								  </script> 
                                  
                                   
								  @if(isset($proffessional->exprstatus) == 2)
								  <script>$('.currentstatus').html($('[name=tmplt_curentstatus]').html());</script> 
                                  @else 
                                  <script>$('.currentstatus').html($('[name=tmplt_curentstatus]').html());</script> 
                                  @endif        
                                                  
                                                  <script>var email = '<div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Email address 1</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="email1" placeholder="Email address 1" > </label> </div></div><div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Email address 2</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="email2"  placeholder="Email address 2" > </label> </div></div><div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Email address 3</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="email3" placeholder="Email address 3" > </label> </div></div>';</script>
                                                       
                                                   
                                                       
                                                       
                                                       
                                                        </div>
														<div class="col-md-6">
														   
														</div>
                                                        
                                                        
                                                        
                                                        
                                                        <div class="col-xs-6">
                                                             <ul class="list-listings-2 expirience">
                                                             
                                                              @foreach ($experiences as $experience)
                                                            <li class="featured" style="margin-bottom:0px;margin-top:5px;"> <div class="listing-header bg-base"><button type="button" class="close">×</button>  Expirience information</div><fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important"> <section> <div class="row"> <div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Company name <span style="color:red">*</span></label> <label class="input"> <input type="text" value="{{ $experience->companyName }}" name="companyname" placeholder="Company name"> </label> </div></div><div class="col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Start Year</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input value="{{ $experience->startYear }}" type="text" name="startyear"  placeholder="Start Year"> </label> </div></div><div class="col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">End year</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="endyear"  value="{{ $experience->endYear }}" placeholder="End Year"> </label> </div></div><div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Description</label> <label class="textarea"> <i class="icon-append fa fa-pencil"></i> <textarea type="text"  name="description" placeholder="Description" >{{ $experience->description }}</textarea> </label> </div></div></div></section> </fieldset> </li>  @endforeach
                                                             
                                                             </ul> 
                                  <script>var expirience = '<li class="featured" style="margin-bottom:0px;margin-top:5px;"> <div class="listing-header bg-base"><button type="button" class="close">×</button>  Expirience information</div><fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important"> <section> <div class="row"> <div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Company name <span style="color:red">*</span></label> <label class="input"> <input type="text" name="companyname" placeholder="Company name"> </label> </div></div><div class="col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Start Year</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="startyear" placeholder="Start Year"> </label> </div></div><div class="col-md-6 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">End year</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="endyear" placeholder="End Year"> </label> </div></div><div class="col-md-12 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Description</label> <label class="textarea"> <i class="icon-append fa fa-pencil"></i> <textarea type="text" name="description" placeholder="Description" ></textarea> </label> </div></div></div></section> </fieldset> </li>';var addmoreerpr = '<a href="javascript:void(0);" class="btn btn-xs btn-base btnaddnew">Add new</a>';</script>
                                  
                                   <div class="row">
                                    <div class="col-md-10">&nbsp;</div>
                                    <div class="col-md-2 addmoreexpr" style="text-align:right">@if(isset($proffessional->exprstatus))
                                    @if($proffessional->exprstatus == 2)
                                    <a href="javascript:void(0);" class="btn btn-xs btn-base btnaddnew">Add new</a>@endif @endif
                                    </div></div>  
                                                
                                      </div></div>   
                                                      
                                                </section>
                                                <div class="row"><br />
                                    <div class="col-md-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                            <span>Next</span>
                                        </button>
                                    </div>
                                  </div>
                                                 
                                            </section></section></fieldset>  

                                           
                                        </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" media="all" />
<link rel="stylesheet" href="http://loudev.com/css/multi-select.css" media="all" />
<script src="http://loudev.com/js/jquery.multi-select.js"></script>

<script>
var preferredlocation = [];
$(function(){ 
 // var preferred = array();
   
   $("[name=preferredlocation]").multiSelect({
  afterSelect: function(values){ 
   preferredlocation.push(parseInt(values));
  },
  afterDeselect: function(values){
    preferredlocation.pop(values);
  }
}); 
   
});

</script>
    <script src="/assets/app/register.proffessional.js"></script>
@stop
