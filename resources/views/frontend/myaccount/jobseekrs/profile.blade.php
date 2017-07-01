<div class="wp-tabs">
    <ul class="nav nav-pills nav-justified">
        <li class="active"><a href="#tabprofiledetails" data-toggle="tab">Profile Details</a></li>
        <li><a href="#professional" data-toggle="tab">Professional Details</a></li>
        <li><a href="#educational" data-toggle="tab">Educational Details</a></li>
        <li><a href="#Applied" data-toggle="tab">Applied Jobs</a></li>
        <li><a href="#Shortlisted" data-toggle="tab">Shortlisted Jobs</a></li>
        <li><a href="#documents" data-toggle="tab">Uploaded Documents</a></li>
    </ul>
    <div class="tab-content tab-content-inverse">
        <div class="tab-pane active" id="tabprofiledetails">
            <h4 class="col-md-4 pull-left">Profile Details</h4>
            <div class="col-md-3 pull-right"><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg pull-right" title="">
                    <span class="c-white">Edit</span>
                </a>

            </div>
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>
                    @foreach($data['profile'] as $profile)
                    <tr><th>Full Name</th>   <td>{{ $profile->firstName }} {{ $profile->lastName }}</td></tr>
                    <tr> <th>Mobile Number</th> <td>{{ $profile->mobileNumber }}</td></tr>
                    <tr> <th>City</th>  <td>{{ $profile->city }}</td></tr>
                    <tr> <th>Pincode</th><td>{{ $profile->pinCode }}</td></tr>
                    <tr> <th>Address</th> <td>{{ $profile->address }}</td></tr>
                    <tr> <th>Gender</th><td>{{ $profile->Gender == 1 ? "Male" : "Female"  }}</td></tr>
                    <tr><th>Short Bio</th> <td>{{ $profile->shortBio }}</td></tr>

                    @endforeach  
                </tbody>
            </table>
        </div>
        <div class="tab-pane" id="professional">
            <h4 class="col-md-4 pull-left">Professional Details</h4>
            <div class="col-md-3 pull-right"><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="" style="margin-left:1%;">
                    <span class="c-white">Edit</span>
                </a>
                <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="">
                    <span class="c-white">Add New</span>
                </a>
            </div>
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
              <!--   <tbody>
                @foreach($data['personal'] as $personal)
                 <tr><th>Date Of Birth</th>   <td>{{ $personal->dob }}</td></tr>
                    <tr>   <th>Passport</th> <td>{{ $personal->passport }}</td></tr>
                      <tr> <th>Adhar Card</th>  <td>{{ $personal->adharcard }}</td></tr>
                      <tr> <th>PAN Card</th><td>{{ $personal->pancard }}</td></tr>
                      <tr> <th>Marital Status</th> <td>{{ $personal->marital == 1 ? "Yes" : "No" }}</td></tr>
                      <tr> <th>Willing to relocate??</th><td>{{ $personal->relocate == 1 ? "Yes" : "No" }}</td></tr>
                  <tr><th>Flexible with shifts??</th> <td>{{ $personal->shifts == 1 ? "Yes" : "No" }}</td></tr>
                 <tr> <th>Owning a vehicle??</th><td>{{ $personal->vehicle == 1 ? "Yes" : "No" }}</td></tr>
                @endforeach    
                
                  </tbody> -->
                <thead><th>Company Name</th><th>Job Title</th><th>Designation</th><th>Experience(Years)</th></tr></thead>
                <tbody>
                    <tr><td>Robosoft</td><td>Sernior.Engineer</td><td>2</td></tr>
                    <tr><td>Robosoft</td><td>Sernior.Engineer</td><td>2</td></tr>
                    <tr><td>Robosoft</td><td>Sernior.Engineer</td><td>2</td></tr>
                </tbody>
            </table>
        </div>

        <div class="tab-pane" id="educational">
            <h4 class="col-md-4 pull-left">Educational Details</h4>
            <div class="col-md-3 pull-right"><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="" style="margin-left:1%;">
                    <span class="c-white">Edit</span>
                </a>
                <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="">
                    <span class="c-white">Add New</span>
                </a>
            </div>

            <table id="educationalTable" class="table table-orders table-bordered table-striped table-responsive no-margin">
                <tbody>

                    <tr>
                        <th>Highest Qualification</th>
                        <th>Cources</th>
                        <th>Specialization</th>
                        <th>University/College</th>
                        <th>Cource Type</th>
                        <th>Passing Year</th> 
                        <th>Action</th> 
                    </tr>

                    <?php
                    echo "<pre>";
                    print_r($data['education']);
                    ?>
                    @foreach($data['education'] as $education)
                    <tr>
                <input type="hidden" value="{{ $education->id }}" id="id" name="id"/>
                <td >{{ $education->qualificationName }}</td>
                <td>{{ $education->courceName }}</td>
                <td>{{ $education->specilizationName }}</td>
                <td>{{ $education->universityName }}</td>
                <td>{{ $education->courcetypeId == 1 ? "Fulltime" : "Parttime" }}</td>
                <td>{{ $education->passingYear }}</td> 
                <td><button class="btn btn-xs btn-info editTest" title="edit"
                            data-id="{{$education->id }}">edit
                    </button></td>
                </tr>
                @endforeach  

                </tbody>
            </table>

        </div>


        <div class="tab-pane" id="Applied">
            <h4 class="col-md-4 pull-left">Applied Jobs</h4>


            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
              <!--   <tbody>
                @foreach($data['personal'] as $personal)
                 <tr><th>Date Of Birth</th>   <td>{{ $personal->dob }}</td></tr>
                    <tr>   <th>Passport</th> <td>{{ $personal->passport }}</td></tr>
                      <tr> <th>Adhar Card</th>  <td>{{ $personal->adharcard }}</td></tr>
                      <tr> <th>PAN Card</th><td>{{ $personal->pancard }}</td></tr>
                      <tr> <th>Marital Status</th> <td>{{ $personal->marital == 1 ? "Yes" : "No" }}</td></tr>
                      <tr> <th>Willing to relocate??</th><td>{{ $personal->relocate == 1 ? "Yes" : "No" }}</td></tr>
                  <tr><th>Flexible with shifts??</th> <td>{{ $personal->shifts == 1 ? "Yes" : "No" }}</td></tr>
                 <tr> <th>Owning a vehicle??</th><td>{{ $personal->vehicle == 1 ? "Yes" : "No" }}</td></tr>
                @endforeach    
                
                  </tbody> -->
                <thead><th>Company Name</th><th>Job Title</th><th>Designation</th><th>Experience(Years)</th><th>Location</th></tr></thead>
                <tbody>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td></tr>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td></tr>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td></tr>
                </tbody>
            </table>

        </div>
        <div class="tab-pane" id="Shortlisted">
            <h4 class="col-md-4 pull-left">Shortlisted Jobs</h4>


            <table class="table table-orders table-bordered table-striped table-responsive no-margin">
              <!--   <tbody>
                @foreach($data['personal'] as $personal)
                 <tr><th>Date Of Birth</th>   <td>{{ $personal->dob }}</td></tr>
                    <tr>   <th>Passport</th> <td>{{ $personal->passport }}</td></tr>
                      <tr> <th>Adhar Card</th>  <td>{{ $personal->adharcard }}</td></tr>
                      <tr> <th>PAN Card</th><td>{{ $personal->pancard }}</td></tr>
                      <tr> <th>Marital Status</th> <td>{{ $personal->marital == 1 ? "Yes" : "No" }}</td></tr>
                      <tr> <th>Willing to relocate??</th><td>{{ $personal->relocate == 1 ? "Yes" : "No" }}</td></tr>
                  <tr><th>Flexible with shifts??</th> <td>{{ $personal->shifts == 1 ? "Yes" : "No" }}</td></tr>
                 <tr> <th>Owning a vehicle??</th><td>{{ $personal->vehicle == 1 ? "Yes" : "No" }}</td></tr>
                @endforeach    
                
                  </tbody> -->
                <thead><th>Company Name</th><th>Job Title</th><th>Designation</th><th>Experience(Years)</th><th>Location</th><th>Apply Now</th></tr></thead>
                <tbody>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td><td><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg " title="">
                                <span class="c-white">Apply Now</span>
                            </a></td></tr>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td><td><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg " title="">
                                <span class="c-white">Apply Now</span>
                            </a></td></tr>
                    <tr><td>Robosoft</td><td><a href="whilo.in/pricing">Job Title must be displayed here</a></td><td>Sernior.Engineer</td><td>2</td><td>Bangalore</td><td><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg" title="">
                                <span class="c-white">Apply Now</span>
                            </a></td></tr>
                </tbody>
            </table>

        </div>
        <div class="tab-pane" id="documents">
            <div class="row">
                <h4 class="col-md-4 pull-left">Documents</h4>
                <div class="col-md-6 pull-right"><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="" style="margin-left:1%;">
                        <span class="c-white">Edit</span>
                    </a>
                    <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="">
                        <span class="c-white">Upload New Documents</span>
                    </a>
                </div></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Educational Documents</div>
                        <div class="panel-body">
                            <div class="row">
                                <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                                    <tbody>
                                        @foreach($data['documents'] as $documents)
                                        @if($documents->documentId == 2)<tr><td>{{ $documents->docTitle }}</td><th><a>{{ $documents->actualName }}</a></th></tr>@endif
                                        @endforeach    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Professional Documents</div>
                        <div class="panel-body">

                            <div class="row">
                                <table class="table table-orders table-bordered table-striped table-responsive no-margin">
                                    <tbody>
                                        @foreach($data['documents'] as $documents)
                                        @if($documents->documentId == 1)<tr><td>{{ $documents->docTitle }}</td><th><a>{{ $documents->actualName }}</a></th></tr>@endif
                                        @endforeach    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>                          
        </div>                 

    </div>
</div>


<script>

    $(document).ready(function () {
        table = $('#educationalTable');

        $('.editTest').click(function () {
            var currentTD = $(this).parents('tr').find('td');

            if ($(this).html() == 'Edit') {
                $.each(currentTD, function () {
                    $(this).prop('contenteditable', true)
                });
            } else {
                $.each(currentTD, function () {
                    $(this).prop('contenteditable', false)
                });
            }

            $(this).html($(this).html() == 'Edit' ? 'Save' : 'Edit')

            if ($(this).html() == 'Edit') {
                var currentRow = $(this).closest("tr");
                id = $(this).data('id');
                var hQuali = currentRow.find("td:eq(0)").text();
                var cources = currentRow.find("td:eq(1)").text();
                var specalization = currentRow.find("td:eq(2)").text();
                var university = currentRow.find("td:eq(3)").text();
                var courseType = currentRow.find("td:eq(4)").text();
                var passYear = currentRow.find("td:eq(5)").text();
                var result = [hQuali, cources, specalization, university,courseType,passYear];
                var r=[];
                r.push(result);
                console.log(r);
              //console.log("hQuali"+hQuali);console.log("cources"+cources);console.log("specalization"+specalization);
             // console.log("university"+university);console.log("courseType"+courseType);console.log("passYear"+passYear);

            }

            // console.log("tdPhone"+tdPhone);
            // console.log("tdEmail"+tdEmail);console.log("tdButtons"+tdButtons);*/





        });


    });



</script>