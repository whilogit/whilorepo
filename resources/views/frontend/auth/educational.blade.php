@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Educational Details</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Educational Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="slice bg-white">
        <div class="wp-section">
            <div class="container">
                <!-- Checkout process - Progress bar -->
                <ol class="progtrckr hidden-xs" data-progtrckr-steps="5">
                    <li class="progtrckr-done">Educational Details</li>
                    <li class="progtrckr-todo">Personal Details</li>
                    <li class="progtrckr-todo">Proffessional Details</li>
                    <li class="progtrckr-todo">Upload Documents</li>
                    <li class="progtrckr-todo">Completed</li>
                </ol>

                <div class="row">
                    
                    <div class="col-md-12">
                        <div class="wp-block default user-form">    
                            <div class="form-header">
                                <h2>Educational Details</h2>
                            </div>
                            <div class="form-body">
                                <form  name="education" class="sky-form">                                    
                                   
                        <ul class="list-listings-2 newqualification">
                           @if(count($education) > 0)
                            @foreach ($education as $details)
                            <li class="featured" style="margin-bottom:-17px;margin-top:20px;">
                                <div class="listing-header bg-base">
                                
                                <button type="button" class="close">×</button>
                                Your qualification details</div>
                               <fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important">    
                                    	
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Qualification <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <select name="qualification" required="required">
                                                            <option value="" selected="" disabled="">Qualification</option>
                                                           @foreach ($qualifictions as $qualifiction)
                                                             <option  {{ isset($details->qualificationId) ?  $details->qualificationId == $qualifiction->qualificationId ? "selected" : '' : '' }}  value="{{ $qualifiction->qualificationId }}">{{ $qualifiction->qualificationName }}</option>
                                                            @endforeach
                                                        </select>
                                                    <i></i>
                                                </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    
                                                    <div class="form-group">
                                                        <label class="label">Cources <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="cources" required="required" placeholder="Cources" value="{{{ $details->courceName or '' }}}">
                                                            </label>
                                                    </div>               
                                                </div>
												 <div class="col-md-4 col-sm-6 col-xs-12">
                                                   <div class="form-group">
                                                        <label class="label">Specialization</label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="specialization" placeholder="Specialization" value="{{{ $details->specilizationName or '' }}}">
                                                            </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">College/University Name <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" required="required" name="university" placeholder="College/University" value="{{{ $details->courceName or '' }}}">
                                                            </label>
                                                    </div>               
                                                </div>
                                           
                                               
												
												 <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Cource Type <span style="color:red">*</span></label>
                                                           <label class="select">
                                                    <select name="courcetype" required="required">
                                                        <option value="" selected="" disabled="">Cource Type</option>
                                                        <option {{ isset($details->courcetypeId) ?  $details->courcetypeId == 1 ? "selected" : '' : '' }} value="1">Full Time</option>
                                                        <option {{ isset($details->courcetypeId) ?  $details->courcetypeId == 2 ? "selected" : '' : '' }} value="2">Part Time</option>
                                                        <option {{ isset($details->courcetypeId) ?  $details->courcetypeId == 3 ? "selected" : '' : '' }} value="3">Correspondance</option>
                                                                                                
                                                    </select>
                                                    
                                                </label>
                                                    </div>               
                                                </div>
												
											
												
												<div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Passing Year <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="passingyear" required="required" placeholder="Passing Year" value="{{{ $details->	passingYear or '' }}}">
                                                            </label>
                                                    </div>               
                                                </div>
												
                                            </div>  
											
                                            										
                                        </section>
                                                                              
                                    </fieldset>
                                 
                            </li>
                            @endforeach
                            @else
                            <li class="featured" style="margin-bottom:-17px;">
                                <div class="listing-header bg-base">
                                
                                <button type="button" class="close">×</button>
                                Your qualification details</div>
                               <fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important">    
                                    	
                                        <section>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Qualification <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <select name="qualification" required="required">
                                                            <option value="" selected="" disabled="">Qualification</option>
                                                           @foreach ($qualifictions as $qualifiction)
                                                             <option value="{{ $qualifiction->qualificationId }}">{{ $qualifiction->qualificationName }}</option>
                                                          @endforeach
                                                        </select>
                                                    <i></i>
                                                </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    
                                                    <div class="form-group">
                                                        <label class="label">Cources <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="cources" required="required" placeholder="Cources">
                                                            </label>
                                                    </div>               
                                                </div>
												 <div class="col-md-4 col-sm-6 col-xs-12">
                                                   <div class="form-group">
                                                        <label class="label">Specialization</label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="specialization" placeholder="Specialization">
                                                            </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">College/University Name <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" required="required" name="university" placeholder="College/University">
                                                            </label>
                                                    </div>               
                                                </div>
                                           
                                               
												
												 <div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Cource Type <span style="color:red">*</span></label>
                                                           <label class="select">
                                                    <select name="courcetype" required="required">
                                                        <option value="" selected="" disabled="">Cource Type</option>
                                                        <option value="1">Full Time</option>
                                                        <option value="2">Part Time</option>
                                                        <option value="3">Correspondance</option>
                                                                                                
                                                    </select>
                                                    
                                                </label>
                                                    </div>               
                                                </div>
												
											
												
												<div class="col-md-4 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label class="label">Passing Year <span style="color:red">*</span></label>
                                                           <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" name="passingyear" required="required" placeholder="Passing Year">
                                                            </label>
                                                    </div>               
                                                </div>
												
                                            </div>  
											
                                            										
                                        </section>
                                                                              
                                    </fieldset>
                                 
                            </li> 
                            @endif
                         
                        </ul>
                                
                               <div class="row" style="padding-top:15px;">
                                    <div class="col-md-10">&nbsp;</div>
                                    <div class="col-md-2" style="text-align:right">
                                    <a href="javascript:void(0);" class="btn btn-xs btn-base btnaddnew">Add more</a></div></div>  
                                   
                                   
                                   <div class="row">
                                   <div class="col-md-12">
                                                    <div class="form-group">
                                                     <label class="label">Key skill <span style="color:red">*</span></label>
                                                         <label class="input">
                                                        <i class="icon-append fa fa-tag"></i>
                                                        <input type="hidden" name="keyskills" placeholder="Key Skills">
                                                    </label>
                                                    </div>               
                                                </div></div>
                                    
                                   
                                    <script>var newrow = '<li class="featured" style="margin-bottom:-17px;margin-top:20px;"> <div class="listing-header bg-base"> <button type="button" class="close">×</button> Your qualification details</div><fieldset class="no-padding" style="border: 1px solid rgba(128, 128, 128, 0.23);padding: 1% !important; padding-bottom:0px !important"> <section> <div class="row"> <div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Qualification <span style="color:red">*</span></label> <label class="select"> <select name="qualification" required="required"> <option value="" selected="" disabled="">Qualification</option> @foreach ($qualifictions as $qualifiction) <option value="{{$qualifiction->qualificationId}}">{{$qualifiction->qualificationName}}</option> @endforeach </select> <i></i> </label> </div></div><div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Cources <span style="color:red">*</span></label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="cources" required="required" placeholder="Cources"> </label> </div></div><div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Specialization</label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="specialization" placeholder="Specialization"> </label> </div></div><div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">College/University Name <span style="color:red">*</span></label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" required="required" name="university" placeholder="College/University"> </label> </div></div><div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Cource Type <span style="color:red">*</span></label> <label class="select"> <select name="courcetype" required="required"> <option value="" selected="" disabled="">Cource Type</option> <option value="1">Full Time</option> <option value="2">Part Time</option> <option value="3">Correspondance</option> </select> </label> </div></div><div class="col-md-4 col-sm-6 col-xs-12"> <div class="form-group"> <label class="label">Passing Year <span style="color:red">*</span></label> <label class="input"> <i class="icon-append fa fa-pencil"></i> <input type="text" name="passingyear" required="required" placeholder="Passing Year"> </label> </div></div></div></section> </fieldset> </li>';  </script>
                                    
                                    
                                    <br /><br />
                                    <div class="row">
                                    <div class="col-md-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                            <span>Next</span>
                                        </button>
                                    </div>
                                  </div>
                                    
                                    </form></div></div></div></div></div></div></section>
@endsection
@section('after-scripts-end')
  <link rel="stylesheet" href="/assets/css/jquery.tagit.css" media="all" />
    <link rel="stylesheet" href="/assets/css/tagit.ui-zendesk.css" media="all" />
    <script src="/assets/js/tag-it.js"></script>
    <script> var keyskills = [];</script>
    @foreach ($keyskills as $keyskill)
     <script> keyskills.push("{{ $keyskill->keyskillName }}"); </script>
    @endforeach
    
    <script>
	$(function(){
            $('[name=keyskills]').tagit(
			{
				availableTags: keyskills,
                singleField: true,
                singleFieldNode: $('[name=keyskills]'),
				beforeTagAdded:function(event, ui) {
				if($.inArray(ui.tagLabel, keyskills)==-1) return false;
				},
            });
	});
	</script>
    <script src="/assets/app/register.qualification.js"></script>
@stop
