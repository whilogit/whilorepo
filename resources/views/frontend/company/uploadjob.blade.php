@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Upload your job</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                       
                        <li class="active">Upload your job</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
   
    <section class="slice slice-lg bg-image" style="background-image:url(/images/mainbg.png)">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                        <div class="wp-block default user-form no-margin">
                            <div class="form-header">
                                <h2>Upload your job</h2>
                            </div>
                            <div class="form-body">
                                <form  name="uploadjob" class="sky-form">                                    
                                    <fieldset class="no-padding">           
                                        <section class=""> 
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                    <label class="label">Job Title <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="jobtitle" required="required" placeholder="Job Title">
                                                       </label>
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Experience <span style="color:red">*</span></label>
                                                            <label class="select">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <select type="text" name="experience" required="required"><option value="" selected="selected" disabled="disabled">-Select-</option>
                                                                
                                                                @foreach ($response['experience'] as $experience)
                                                                <option value="{{ $experience->experienceId }}">{{ $experience->experienceName }}</option>
                                                                 @endforeach</select>
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Job Location <span style="color:red">*</span></label>
                                                        <label class="select">
                                                            <i class="icon-append fa fa-map"></i>
                                                            <select type="text" name="joblocation" required="required" placeholder="Job Location"><option value="" selected="selected" disabled="disabled">-Select-</option>
                                                            @foreach ($response['locations'] as $locations)<option value="{{ $locations->locationId }}">{{ $locations->locationName }}</option>@endforeach</select>
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label class="label">Last date to apply <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="text" name="lastdate" required="required" placeholder="Last date to apply">
                                                        </label>
                                                    </div>               
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            <div class="row">
                                           		 <div class="col-md-12">
                                                    <div class="form-group">
                                                       <label class="label">Short Description (It will display only in list page)<span style="color:red">*</span></label>
                                            <label class="textarea">
                                                <textarea rows="4"  style="width:100%" name="shortdescription" placeholder="Short Description"></textarea>
                                            </label>
                                                    </div>               
                                                </div>
                                            
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <label class="label">Job Description <span style="color:red">*</span></label>
                                            <label class="textarea">
                                                <textarea rows="10"  style="width:100%" name="jobdescription" placeholder="Job Description"></textarea>
                                            </label>
                                                    </div>               
                                                </div>
                                           	 </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Salary (Anual) <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <i class="icon-append fa fa-currency"></i>
                                                        <select required="required" name="salary"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['salaryrange'] as $salaryrange)<option value="{{ $salaryrange->salaryId }}">{{ $salaryrange->salaryName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label class="label">Industry <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <select required="required" name="industry"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['industry'] as $industry)<option value="{{ $industry->industryId }}">{{ $industry->industryName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Functional area <span style="color:red">*</span></label>
                                                        <label class="select">
                                                        <i class="icon-append fa fa-building"></i>
                                                        <select required="required" name="functionalarea"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['jobrole'] as $jobrole)<option value="{{ $jobrole->jobroleId }}">{{ $jobrole->jobroleName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label class="label">Role category <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <select required="required" name="rolecategory"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['jobrolecategory'] as $jobrolecategory)<option value="{{ $jobrolecategory->rolecategoryId }}">{{ $jobrolecategory->rolecategoryName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Role <span style="color:red">*</span></label>
                                                        <label class="select">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <select required="required" name="role"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['locations'] as $locations)<option value="{{ $locations->locationId }}">{{ $locations->locationName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Joining time <span style="color:red">*</span></label>
                                                        <label class="select">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <select required="required" name="joiningtime"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['joiningtime'] as $joiningtime)<option value="{{ $joiningtime->joiningtimeId }}">{{ $joiningtime->joiningtimeName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                                
                                                
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                     <label class="label">Key skill <span style="color:red">*</span></label>
                                                         <label class="input">
                                                        <i class="icon-append fa fa-tag"></i>
                                                        <input type="hidden" name="keyskills" placeholder="Key Skills">
                                                    </label>
                                                    </div>               
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Education <span style="color:red">*</span></label>
                                                         <label class="select">
                                                    <select required="required" name="education">
                                                        <option value="" selected="" disabled="">Education</option>
														@foreach ($response['educations'] as $educations)<option value="{{ $educations->educationId }}">{{ $educations->educationName }}</option>@endforeach
                                                    </select>
                                                    <i></i>
                                                </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label class="label">Mode of Employment <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <i class="icon-append fa fa-tag"></i>
                                                        <select type="text" required="required" name="modeofemployeement"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['employmentmode'] as $employmentmode)<option value="{{ $employmentmode->employmentmodeId }}">{{ $employmentmode->employmentmodeName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>               
                                                </div>
                                            </div>
                                               
                                        </section>
                                        
                                        <section>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    &nbsp;
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                                        <span>Submit</span>
                                                    </button>
                                                </div>
                                                
                                                 <div class="col-md-6"><br />
                                                    <ul class="list-check responsereport" style="color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div>
                                                
                                        </div></section>
                                    </fieldset>
                                </form>  
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')

    <link rel="stylesheet" href="/assets/sceditor/minified/themes/default.min.css" media="all" />
    <style>
	code:before {
				position: absolute;
				content: 'Code:';
				top: -1.35em;
				left: 0;
			}
			code {
				margin-top: 1.5em;
				position: relative;
				background: #eee;
				border: 1px solid #aaa;
				white-space: pre;
				padding: .25em;
				min-height: 1.25em;
			}
			code:before, code {
				display: block;
				text-align: left;
			}

	</style>
	<script src="/assets/sceditor/minified/jquery.sceditor.bbcode.min.js"></script>
	<script>$("[name=jobdescription]").sceditor({	plugins: "bbcode", toolbar: "bold,italic,underline|strike,subscript,superscript|left,center,right|font,size,color|bulletlist,orderedlist|horizontalrule|link",locale: "no-NB"});
	$('div.sceditor-container').css('width','100%');
	
	</script>
    <link rel="stylesheet" href="/assets/css/jquery.tagit.css" media="all" />
    <link rel="stylesheet" href="/assets/css/tagit.ui-zendesk.css" media="all" />
    <script src="/assets/js/tag-it.js"></script>
    <script> var keyskills = [];</script>
    @foreach ($response['keyskill'] as $keyskill)
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
    
    <script src="/assets/app/upload.jobs.js"></script>
    <script>
  $( function() {
	  var today = new Date(); 
		var dd = today.getDate() + 1;
		var mm = today.getMonth()+1; //January is 0!
		var yyyy = today.getFullYear();
    $( "[name=lastdate]" ).datepicker({
		dateFormat: "dd-mm-yy",
		defaultDate: +1,
		minDate: new Date(yyyy, mm , dd)
	});
  } );
  </script>
    
@stop



  