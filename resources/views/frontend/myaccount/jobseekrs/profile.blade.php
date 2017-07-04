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
            <div id="Edumess"></div>
            <!--div class="col-md-3 pull-right"><a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="" style="margin-left:1%;">
                    <span class="c-white">Edit</span>
                </a>
                <a name="btnsearch" href="javascript:void(0)" class="btn btn-lg  pull-right" title="">
                    <span class="c-white">Add New</span>
                </a>
            </div>-->
            <button id="btnAdd" class="btn btn-lg  pull-right c-white" style="float:left">Add New</button>
            <table id="educationalTable" class="table table-orders table-bordered table-striped table-responsive no-margin">
                <thead> 


                    <tr>
                        <th>Highest Qualification</th>
                        <th>Cources</th>
                        <th>Specialization</th>
                        <th>University/College</th>
                        <th>Cource Type</th>
                        <th>Passing Year</th> 
                        <th>Action</th> 
                    </tr>


                </thead>
                <tbody> 
                </tbody> 
            </table>
            <?php
            // echo "<pre>";
            // print_r($data['education']);
            ?>
            <!--@foreach($data['education'] as $education)
            <tr>
        <input type="hidden" value="{{ $education->id }}" id="id" name="id"/>
        <td >{{ $education->qualificationName }}</td>
        <td>{{ $education->courceName }}</td>
        <td>{{ $education->specilizationName }}</td>
        <td>{{ $education->universityName }}</td>
        <td>{{ $education->courcetypeId == 1 ? "Fulltime" : "Parttime" }}</td>
        <td>{{ $education->passingYear }}</td> 
        <td><button class="btn btn-xs btn-info editTest" title="edit"
                    data-id="{{$education->id }}">Edit
            </button></td>
        </tr>
        @endforeach  

        </tbody>
    </table>-->

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

        getAllEdcucationDetails();
        $(".btnEdit").bind("click", Edit);

        $("#btnAdd").bind("click", Add);
        
        
        //select uery
            /*    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/auth/getAllqualificationList',
            type: 'GET',
            data: {"_token": "{{ csrf_token() }}"},
            dataType: 'JSON',
            success: function (data) {

                console.log(data.id);
            }
                    
                    
                });*/
        


    });


    function Add()
    {

        $("#educationalTable tbody").append("<tr>" + "<td><input type='text'/></td>" +
                "<td><input type='text'/></td>" +
                "<td><input type='text'/></td>" +
                "<td><input type='text'/></td>" +
                "<td><input type='text'/></td>" +
                "<td><input type='text'/></td>" +
                "<td><button   class='btnSave'>Save</button>\n\
<button   class='btnDelete'>Delete</button></td>" + "</tr>");
        $(".btnSave").bind("click", Save);
        $(".btnDelete").bind("click", Delete);
    }

    function Edit() {

        var currentRow = $(this).closest("tr");
        id = $(this).data('id');


        var par = $(this).parent().parent(); //tr

        var hQuali = par.children("td:nth-child(1)");
        var cources = par.children("td:nth-child(2)");
        var specalization = par.children("td:nth-child(3)");
        var university = par.children("td:nth-child(4)");

        var courseType = par.children("td:nth-child(5)");

        var passYear = par.children("td:nth-child(6)");

        var tdButtons = par.children("td:nth-child(7)");
        hQuali.html("<input type='text' name='hQuali' id='hQuali' value='" + hQuali.html() + "'/>");
        cources.html("<input type='text'name='cources'  id='cources' value='" + cources.html() + "'/>");
        specalization.html("<input type='text'  name='specalization' id='specalization' value='" + specalization.html() + "'/>");
        university.html("<input type='text' name='university' id='university' value='" + university.html() + "'/>");

        courseType.html("<input type='text'  name='courseType' id='courseType' value='" + courseType.html() + "'/>");

        passYear.html("<input type='text' name='passYear' id='passYear' value='" + passYear.html() + "'/>");


        tdButtons.html("<button src='images/disk.png' class='btnSave' data-id=" + id + ">Save</button>");
        $(".btnSave").bind("click", Save);
        $(".btnEdit").bind("click", Edit);
        //   $(".btnDelete").bind("click", Delete);





    }


    function Save() {


        var currentRow = $(this).closest("tr");

        id = $(this).data('id');

        var hQualiSave = currentRow.find("td:eq(0) input[type=text]").val();
        var courcesSave = currentRow.find("td:eq(1) input[type=text]").val();
        var specalizationSave = currentRow.find("td:eq(2) input[type=text]").val();
        var universitySave = currentRow.find("td:eq(3) input[type=text]").val();
        var courseTypeSave = currentRow.find("td:eq(4) input[type=text]").val();
        var passYearSave = currentRow.find("td:eq(5) input[type=text]").val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        /*  console.log(hQualiSave);
         console.log(courcesSave);
         console.log(specalizationSave);
         console.log(universitySave);
         console.log(courseTypeSave);
         console.log(passYearSave);*/
        $.each(currentRow, function () {
            $.ajax({
                url: '/auth/updateEducation',
                type: 'POST',
                async: true,

                data: {"_token": "{{ csrf_token() }}", "id": id, "hQuali": hQualiSave, "cources": courcesSave, "specalization": specalizationSave, "university": universitySave, "courseType": courseTypeSave, "passYear": passYearSave},
                dataType: 'JSON',
                success: function (data) {


                    if (success = "true") {
                        $('#Edumess').html("<div class='alert alert-success'><strong>Success!</strong> SucessFully Updated</div>");
                        window.setTimeout(function () {
                            $('#Edumess').fadeOut();
                        }, 2000);
                    } else
                    {
                        $('#Edumess').html("<div class='alert alert-danger'><strong>Success!</strong> Error in Updating</div>");
                        window.setTimeout(function () {
                            $('#Edumess').fadeOut();
                        }, 2000);

                    }


                }


            });

        });


        var par = $(this).parent().parent(); //tr 
        var hQuali = par.children("td:nth-child(1)");
        var cources = par.children("td:nth-child(2)");
        var specalization = par.children("td:nth-child(3)");
        var university = par.children("td:nth-child(4)");

        var courseType = par.children("td:nth-child(5)");

        var passYear = par.children("td:nth-child(6)");

        var tdButtons = par.children("td:nth-child(7)");


        hQuali.html(hQuali.children("input[type=text]").val());
        cources.html(cources.children("input[type=text]").val());
        specalization.html(specalization.children("input[type=text]").val());
        university.html(university.children("input[type=text]").val());

        courseType.html(courseType.children("input[type=text]").val());

        passYear.html(passYear.children("input[type=text]").val());




        tdButtons.html("<button class='btnDelete'>Delete</button><button class='btnEdit' data-id=" + id + ">Edit</button>");
        $(".btnEdit").bind("click", Edit);



    }

    function getAllEdcucationDetails()
    {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/auth/getAllEducationDetails',
            type: 'GET',
            data: {"_token": "{{ csrf_token() }}"},
            dataType: 'JSON',
            success: function (data) {

                data.forEach(function (item) {
                  

                    $("#educationalTable tbody").append("<tr>" +
                            "<td>" + item.qualificationName + "</td>" +
                            "<td>" + item.courceName + "</td>" +
                            "<td>" + item.specilizationName + "</td>" +
                            "<td>" + item.universityName + "</td>" +
                            "<td>" + item.universityName + "</td>" +
                            "<td>" + item.passingYear + "</td>" +
                            "<td><button   class='btnEdit' data-id=" + item.id + ">Edit</button>\n\
<button   class='btnDelete'>Delete</button></td>" + "</tr>");
                    $(".btnEdit").bind("click", Edit);

                });

            }
        });
    }
    
    
    
    
    
</script>