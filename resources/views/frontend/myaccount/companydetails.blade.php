   <div class="panel panel-default">
                          
                          <div class="panel-body">
                                 <h4 class="col-md-4 pull-left">Company Name</h4>

<button id="edit_test" class="btn btn-base btn-icon btn-icon-right  pull-right"value=""> <span>Edit</span></button>
<div id="compnay_detail_table" >
<div class="col-md-12">
    <h4>Basic info</h4> <div id="update_message"></div>
<table class="table table-orders table-bordered table-striped table-responsive no-margin" id="company_table">
<thead>
<tr><th>Website</th><th>Phone</th><th>Location</th><th>Email ID</th><th>Industry</th><th>Address</th></tr>
</thead>
<tbody>
<tr><th>{{$compdetails->website}}</th><th>{{$compdetails->mobileNumber}}</th><th>{{$compdetails->locationName}}</th><th>{{$compdetails->emailAddress}}</th><th>{{$compdetails->industryName}}</th><th>{{$compdetails->address}}</th></tr>
</tbody>
</table>
</div>
<div class="col-md-12"><br/>
<h4>Description</h4>
<p class="text-justify" style="background:#ddd;padding:1%;color:black;font-weight:500;">{{$compdetails->aboutbio}}</p>
</div>
 </div>
<div id="edit_form_company" style="display:none;">
    <div class="col-md-12">
       <div class="form-body">
                                <form name="update_company_details" class="sky-form">   
                                   

                                    <fieldset class="no-padding">           
                                        <section class=""> 
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                    <label class="label">Website <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="website" required="required" value="{{$compdetails->website}}">
                                                       </label>
                                                    </div>     
                                                </div>
                                                 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Phone <span style="color:red">*</span></label>
                                                             <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="mobileno" required="required" value="{{$compdetails->mobileNumber}}">
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
                                                            @foreach($response['locations'] as $locations)<option value="{{ $locations->locationId}}" {{ $locations->locationId == $compdetails->locationId ? 'selected="selected"' : '' }}>{{ $locations->locationName }}</option>@endforeach</select>
                                                        </label>
                                                    </div>     
                                                </div>
                                                 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Email ID <span style="color:red">*</span></label>
                                                             <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="emailadd" required="required" value="{{$compdetails->emailAddress}}">
                                                       </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                                <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                    <label class="label">Industry <span style="color:red">*</span></label>
                                                         <label class="select">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <select required="required" name="industry"><option value="" selected="selected" disabled="disabled">-Select-</option>@foreach ($response['industry'] as $industry)
                                                            <option value="{{ $industry->industryId }}" {{ $industry->industryId == $compdetails->industry ? 'selected="selected"' : '' }}>{{ $industry->industryName }}</option>@endforeach</select>
                                                    </label>
                                                    </div>     
                                                </div>
                                                 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Address<span style="color:red">*</span></label>
                                                             <label class="input">
                                                            <i class="icon-append fa fa-pencil"></i>
                                                            <input type="text" name="comaddress" required="required" value="{{$compdetails->address}}">
                                                       </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                        </section>
                                          <button id="company_detail_update" class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="button">
                                                <span>Update</span>
                                            </button>
                                    </fieldset>
                                </form>
</div>
 </div>
        </div>
<!--

<div class="form-body col-md-12 ">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group col-md-12">
                                                <label class="label">Enter 3 mins. company video</label>
<!-- this is from youtube embedded link  -->
 <!--                                               <label class="input">                                                 
                                                    <input type="text" name="title">
                                                </label>
                                            </div>     
                                        </section> 
 <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Submit</span>
                                            </button>
                                        </section>
 </fieldset> 
</form>-->



  </div>
</div>


<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>

<script type="text/javascript">
$(function() {
   
       $('#edit_test').click(function()
        { 
             $('#compnay_detail_table').hide();
           $('#edit_form_company').show();
            
        });
   $('#company_detail_update').click(function()
        { 
           
             var postdata = {};
             var input = $('[name=update_company_details]').serialize();
             postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
              postdata['website']=$('input[name="website"]').val();
              postdata['mobileNumber']=$('input[name="mobileno"]').val();
              postdata['emailAddress']=$('input[name="emailadd"]').val();
              postdata['address']=$('input[name="comaddress"]').val();
             // postdata['shortdescription']=$('textarea#shortdescription').val();
              //postdata['jobdescription']=$('textarea#jobdescription').val()
              postdata['locationId']=$('select[name="comlocation"]').val();
              postdata['industry']=$('select[name="industry"]').val();
                $('body').removeClass('loaded');
                                         $.post('/company/editdetails',postdata,function(response){ 
                                            
                                         $('body').addClass('loaded');
                                                 if(response.success)
                                                 {

                                                    $('#update_message').append('<span><b>Data Updated</b></span>');

                                                 }

        });
                                 
});
});
</script>