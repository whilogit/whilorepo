<div class="panel panel-default">

  <div class="panel-body">
         <h4 class="col-md-4 pull-left">Posted Jobs</h4>
         <div id="job_detail_table" >

         <table class="table table-orders table-bordered table-striped table-responsive no-margin">


                                        <tbody>
                                            <tr><th>Job Title</th><th>Valid Till</th><th>Location</th><th>Edit</th></tr>
                                            
                                            @foreach($jobdetails as $key=> $list)
                                            <tr><td><a href="#"></a> {{ $list->jobTitle }}</td><td>{{ $list->lastdate }}</td><td>{{ $list->locationName }}</td><td><button class="btn btn-base btn-icon btn-icon-right  pull-right jobedit"value=""> <span>Edit</span></button><i class="fa fa-pencil"></i></td></tr>
                                               @endforeach
            </tbody>
            </table>
             </div>
         <div id="edit_posted_job" style="display:none;">
    <div class="col-md-12">
       <div class="form-body">
                                <form name="update_job_details" class="sky-form">   
                                      <fieldset class="no-padding">           
                                        <section class=""> 
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                    <label class="label">Job Title <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="website" required="required" value="">
                                                       </label>
                                                    </div>     
                                                </div>
                                                 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Valid Till <span style="color:red">*</span></label>
                                                             <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="mobileno" required="required" value="">
                                                       </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>  
                                                <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                    <label class="label">Location <span style="color:red">*</span></label>
                                                    
                                                          <label class="select">
                                                            <i class="icon-append fa fa-map"></i>
                                                            <select type="text" name="comlocation" required="required" placeholder="Job Location"><option value="" selected="selected" disabled="disabled">-Select-</option>
                                                            @foreach($response['locations'] as $locations)<option value="">{{ $locations->locationName }}</option>@endforeach</select>
                                                        </label>
                                                    </div>     
                                                </div>
                                                 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Email ID <span style="color:red">*</span></label>
                                                             <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="emailadd" required="required" value="">
                                                       </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                         
                                        </section>
                                          <button id="job_detail_update" class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="button">
                                                <span>Update</span>
                                            </button>
                                    </fieldset>
                                </form>
</div>
 </div>
        </div>
</div>
</div>

<script type="text/javascript">
$(function() {
   
       $('.jobedit').click(function()
        { 
             $('#job_detail_table').hide();
           $('#edit_posted_job').show();
            
        });
   $('#company_detail_update').click(function()
        { 
          
});
});
</script>