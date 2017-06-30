@extends('frontend.layouts.master')

@section('content')
       <div class="pg-opt" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Verify Name</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Verify Name</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
 <section class="slice bg-base" style="background: #242738;text-align: justify;">
           <div class="wp-section">
<div class="container">
<form>
                           
                            <div class="products-order checkout billing-information">
                                                             
                                <div class="row">
                                    <div class="col-sm-6">
                                  									
					<label>Dates of employment <span style="color:red">*</span></label>
                                                <input type="date" name="doe" value="" required="required" placeholder="Dates of employment " class="form-control input-lg">
                                                   
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Job Title<span class="required">*</span></label>
                                        <input type="text" class="form-control input-lg" vk_17500="subscribed">
                                    </div>
                                    <div class="form-group col-sm-6">
                                            <label>Job Description <span class="required">*</span></label>
                                        <textarea class="form-control input-lg"></textarea>
                                    </div>
<div class="form-group col-sm-6">
                                            <label>Why the employee left the job?<span class="required">*</span></label>
                                        <textarea class="form-control input-lg"></textarea>
                                    </div>
                                    <div class="form-group col-sm-4">
                                       
                                   <label>Whether the employee was terminated for cause?<span style="color:red">*</span></label>
                                                 
                                                       <select name="relocate" required="required" class="form-control input-lg">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                                 
                                    </div>
									
									<div class="form-group col-sm-4">
                                       
                                          <label>Whether there any issues with absenteeism or tardiness?<span style="color:red">*</span></label>
                                             
                                                       <select name="relocate" required="required" class="form-control input-lg">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                            
                                    </div>
									
									<div class="form-group col-sm-4">
                                       
                                          <label>The employee is eligible for rehire?<span style="color:red">*</span></label>
                                           
                                                       <select name="relocate" required="required" class="form-control input-lg">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                       
                                    </div>
									
                                    <div class="form-group col-sm-6">
                                        <label>Salary <span class="required">*</span></label>
                                        <input type="number" class="form-control">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Performance grade(out of 10)</label>
                                        <input type="number " class="form-control" vk_17500="subscribed">
                                    </div>
									<div class="form-group col-sm-6">
                                       
                                          <label>Legal or ethical transgressions <span style="color:red">*</span></label>
                                               
                                                       <select name="relocate" required="required" class="form-control input-lg">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                             
                                    </div>
									<div class="form-group col-sm-6">
                                       
                                          <label>Criminal history<span style="color:red">*</span></label>
                                           
                                                       <select name="relocate" required="required" class="form-control input-lg">
                                                       <option   value="1">Yes</option>
                                                       <option  value="0">No</option>
                                                       </select>
                                        
                                    </div>
                                   
  <div class="form-group col-sm-12">
                                            <label>Comments<span class="required">*</span></label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                    
                                
                                </div>
                               
                            </div>
                            
                           
                            
                            <div class="clearfix">
                                <a href="#" class="btn btn-primary btn-lg pull-right ">Submit</a>
                            </div>

                        </form>
  </div>
  </div>
</section>
@endsection