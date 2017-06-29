   <div class="panel panel-default">
                          
                          <div class="panel-body">
                                 <h4 class="col-md-4 pull-left">Company Name</h4>
<a href="#EditCompany" class="btn btn-base pull-right ">Edit</a>
                                 
<div class="col-md-12">
<h4>Basic info</h4>
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

<div class="form-body col-md-12 ">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                    
                                        <section>
                                            <div class="form-group col-md-12">
                                                <label class="label">Enter 3 mins. company video</label>
<!-- this is from youtube embedded link  -->
                                                <label class="input">                                                 
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
</form>



  </div>
</div>

</div>