@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign up</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                       
                        <li class="active">Sign up</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="slice slice-lg bg-image" style="background-image:url(../images/mainbg.png)">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                        <div class="wp-block default user-form user-form-alpha no-margin">
                            <div class="form-header">
                                <h2>Please Submit your feedback</h2>
                            </div>
                            <div class="form-body">
                                 <form name="formFeedback" action="/feedback/submit" method="post">
                                 <input type="hidden" name="user_details" value="{{ $userId }}" />
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                           
                            <div class="products-order checkout billing-information">
                                                             
                                <div class="row">
                                    <div class="col-sm-6">
                                  									
					<label>Dates of employment <span style="color:red">*</span></label>
                                                  
                                                        <i class="icon-append fa fa-date"></i>
                                                        <input type="date" name="doe" value="" required="required" placeholder="Dates of employment " class="form-control">
                                                    
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Job Title<span class="required">*</span></label>
                                        <input type="text" name="jobtitle" required="required" class="form-control" >
                                    </div>
                                    <div class="form-group col-sm-6">
                                            <label>Job Description <span class="required">*</span></label>
                                        <textarea name="jobdescription" required="required" class="form-control"></textarea>
                                    </div>

<div class="form-group col-sm-6">
                                            <label>Why the employee left the job?<span class="required">*</span></label>
                                        <textarea  name="whyEmpLeft" required="required" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       
                                          <label>Whether the employee was terminated for cause?<span style="color:red">*</span></label>
                                                   
                                                       
                                                       <select  name="terminated" required="required" class="form-control">
                                                       <option  value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                                   
                                    </div>
									
									<div class="form-group col-sm-6">
                                       
                                          <label>Whether there any issues with absenteeism or tardiness?<span style="color:red">*</span></label>
                                                   
                                                       <select name="issues" required="required" class="form-control">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                                  
                                    </div>
									
									<div class="form-group col-sm-6">
                                       
                                          <label >The employee is eligible for rehire?<span style="color:red">*</span></label>
                                                 
                                                       <select name="rehire" required="required" class="form-control">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                                    
                                    </div>
									
                                    <div class="form-group col-sm-6">
                                        <label>Salary <span class="required">*</span></label>
                                        <input type="text" required="required" name="salary" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Performance grade(out of 10)</label>
                                        <input type="text" required="required" name="grade" class="form-control" >
                                    </div>
									<div class="form-group col-sm-6">
                                       
                                          <label>Legal or ethical transgressions <span style="color:red">*</span></label>
                                                    
                                                       <select name="ethical" required="required" class="form-control">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                                   
                                    </div>
									
                                   
  <div class="form-group col-sm-12">
                                            <label>Comments<span class="required">*</span></label>
                                        <textarea name="comments" required="required" class="form-control"></textarea>
                                    </div>
                                    
                                
                                </div>
                               
                            </div>
                            
                           
                            
                            <div class="clearfix">
                                <button type="submit" name="submitFeedback" class="btn btn-primary btn-lg pull-right ">Submit</button>
                            </div>
                        </form>        
                            </div>
                            <div class="form-footer">
                                <p>Already have an account? <a href="sign-in-1.html">Click here to sign in.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.jobseekers.js"></script>
@stop
