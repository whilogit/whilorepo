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
            <div id="profilemess"></div>
            <div id="peofileEditButton" >

            </div>
            <table id="profilelTable" class="table table-orders table-bordered table-striped table-responsive no-margin">
                <thead>

                </thead>
            </table>



<!-- <table class="table table-orders table-bordered table-striped table-responsive no-margin">
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
</table>-->
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
        getAllProfileDetails();
        $(".btnEdit").bind("click", educationEdit);

        $("#btnAdd").bind("click", educationAdd);


        //select uery



    });


    function educationAdd()
    {

        getEducationList();
        getcourseTypes();


        $("#educationalTable tbody").append("<tr>" + "<td><select name='edu' class='edu'></select></td>" +
                "<td><input type='text' /></td>" +
                "<td><input type='text' /></td>" +
                "<td><input type='text'/></td>" +
                "<td><select name='courseType' class='courseType'></select></td>" +
                "<td><input type='text' /></td>" +
                "<td><button   class='btnSave'>Save</button>\n\</td>" + "</tr>");
        $(".btnSave").bind("click", educationSave);

    }

    function educationEdit() {


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
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.each(par, function () {
            $.ajax({
                url: '/auth/getAllqualificationList',
                type: 'GET',
                data: {"_token": "{{ csrf_token() }}"},
                dataType: 'JSON',
                success: function (data) {
                    console.log(data);


                    $.each(data, function (key, value)
                    {
                        //  console.log(value.qualificationName);

                        $("#edus").append('<option value=' + value.qualificationId + '>' + value.qualificationName + '</option>');


                    });
                }

            });


            hQuali.html("<select name='edu' id='edus'></select>");

        });



        cources.html("<input type='text'  name='cources' id='cources' value='" + cources.html() + "'/>");

        specalization.html("<input type='text'  name='specalization' id='specalization' value='" + specalization.html() + "'/>");
        university.html("<input type='text' name='university' id='university' value='" + university.html() + "'/>");

        $.each(par, function () {

            $.ajax({
                url: '/auth/getcourseTypes',
                type: 'GET',
                data: {"_token": "{{ csrf_token() }}"},
                dataType: 'JSON',
                success: function (data) {
                    //console.log(data);

                    $.each(data, function (key, value)
                    {
                        $("#courseTypes").append('<option value=' + value.employmentmodeId + '>' + value.employmentmodeName + '</option>');
                    });
                }


            });


            courseType.html("<select name='courseTypes' id='courseTypes'></select>");

        });



        passYear.html("<input type='text' name='passYear' id='passYear' value='" + passYear.html() + "'/>");


        tdButtons.html("<button src='images/disk.png' class='btnSave' data-id=" + id + ">Save</button>");
        $(".btnSave").bind("click", educationSave);
        $(".btnEdit").bind("click", educationEdit);
        //   $(".btnDelete").bind("click", Delete);





    }


    function educationSave() {


        var currentRow = $(this).closest("tr");


        var id;

        if ($(this).data('id') !== 'undefined')
        {
            id = $(this).data('id');
        }
        var hQualiSave = currentRow.find("td:eq(0) select").val();
        var courcesSave = currentRow.find("td:eq(1) input[type=text]").val();
        var specalizationSave = currentRow.find("td:eq(2) input[type=text]").val();
        var universitySave = currentRow.find("td:eq(3) input[type=text]").val();
        var courseTypeSave = currentRow.find("td:eq(4) select").val();
        var passYearSave = currentRow.find("td:eq(5) input[type=text]").val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.each(currentRow, function () {

            $.ajax({
                url: '/auth/updateEducation',
                type: 'POST',
                async: false,
                data: {"_token": "{{ csrf_token() }}", "id": id, "hQuali": hQualiSave, "cources": courcesSave, "specalization": specalizationSave, "university": universitySave, "courseType": courseTypeSave, "passYear": passYearSave},
                dataType: 'JSON',
                success: function (data) {


                    if (success = "true") {

                        if (data.insert == 1 && data.insert != 'undefined')

                        {

                            id = data.id;

                            var tdButtons = par.children("td:nth-child(7)");
                        }



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
        var hQualiSaveText = currentRow.find("td:eq(0) option:selected").text();
        var courseTypeSaveText = currentRow.find("td:eq(4) option:selected").text();
        $.each(currentRow, function () {
            hQuali.html(hQualiSaveText);
            courseType.html(courseTypeSaveText);

        });
        cources.html(cources.children("input[type=text]").val());
        specalization.html(specalization.children("input[type=text]").val());
        university.html(university.children("input[type=text]").val());
        passYear.html(passYear.children("input[type=text]").val());
        tdButtons.html("<button class='btnEdit' data-id=" + id + ">Edit</button>");
        $(".btnEdit").bind("click", educationEdit);
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
                            "<td>" + item.employmentmodeName + "</td>" +
                            "<td>" + item.passingYear + "</td>" +
                            "<td><button   class='btnEdit' data-id=" + item.id + ">Edit</button></td>" + "</tr>");
                    $(".btnEdit").bind("click", educationEdit);
                });
            }
        });
    }


    function getEducationList() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/auth/getAllqualificationList',
            type: 'GET',
            data: {"_token": "{{ csrf_token() }}"},
            dataType: 'JSON',
            success: function (data) {
                //console.log(data);

                $.each(data, function (key, value)
                {
                    $(".edu").append('<option value=' + value.qualificationId + '>' + value.qualificationName + '</option>');
                });
            }


        });
    }

    function getcourseTypes() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/auth/getcourseTypes',
            type: 'GET',
            data: {"_token": "{{ csrf_token() }}"},
            dataType: 'JSON',
            success: function (data) {
                //console.log(data);

                $.each(data, function (key, value)
                {
                    $(".courseType").append('<option value=' + value.employmentmodeId + '>' + value.employmentmodeName + '</option>');
                });
            }


        });
    }






    //profile page ajax
    function getAllProfileDetails() {
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '/auth/getallProfileDetails',
            type: 'GET',
            data: {"_token": "{{ csrf_token() }}"},
            dataType: 'JSON',
            success: function (data) {

                data.forEach(function (item) {

                    //  $('#peofileEditButton').html("<button   class='btn btn-lg pull-right btnEdit'data-id=" + item.seekerId +"><span class='c-white'>Edit</span></button>");
                    gender = item.Gender = 1 ? "Male" : "Female"
                    $("#profilelTable thead").append("<tr><th>Full Name" +
                            "<td>" + item.firstname + "" + item.lastName + "</td></th></tr>" +
                            "<tr><th>Mobile Number<td>" + item.mobileNumber + "</td></th></tr>" +
                            "<tr><th>City<td>" + item.city + "</td></th></tr>" +
                            "<tr><th>Pincode<td>" + item.pinCode + "</td></th></tr>" +
                            "<tr><th>Address<td>" + item.address + "</td></th></tr>" +
                            "<tr><th>Gender<td>" + gender + "</td></th></tr>" +
                            "<tr><th>Short Bio<td>" + item.shortBio + "</td></th></tr>\n\
                                  <tr><th><td><button   class='btn btn-lg pull-right btnProfileEdit'data-id=" + item.seekerId + "><span class='c-white'>Edit</span></button></td></th></tr>");
                    $(".btnProfileEdit").bind("click", profileEdit);
                });
            }
        });

    }



    function profileEdit() {



        var currentRow = $(this).closest("tr");
        id = $(this).data('id');


        var par = $(this).parent(); //tr

        var fullName = $("td").eq(0);

        var mobileNum = $("td").eq(1);
        var city = $("td").eq(2);
        var pincode = $("td").eq(3);

        var address = $("td").eq(4);

        var gender = $("td").eq(5);

        var bio = $("td").eq(6);
        var tdButtons = $("td").eq(7);









        fullName.html("<input type='text'  name='cources' id='cources' value='" + fullName.html() + "'/>");
        mobileNum.html("<input type='text'  name='specalization' id='specalization' value='" + mobileNum.html() + "'/>");
        city.html("<input type='text' name='university' id='university' value='" + city.html() + "'/>");
        pincode.html("<input type='text' name='passYear' id='passYear' value='" + pincode.html() + "'/>");
        address.html("<input type='text' name='passYear' id='passYear' value='" + address.html() + "'/>");
        gender.html("<select name='genders' id='genders'><option value='1'>Male</option><option value='2'>Female</option></select>");

        bio.html("<input type='text' name='passYear' id='passYear' value='" + bio.html() + "'/>");

        tdButtons.html("<button src='images/disk.png' class='btnprofileSave' data-id=" + id + ">Save</button>");
        $(".btnprofileSave").bind("click", profileSave);
        $(".btnProfileEdit").bind("click", profileEdit);

    }


    function profileSave() {


        var currentRow = $(this).closest("tr");

        id = $(this).data('id');









        var fullName = $("td:eq(0) input[type=text]").val();
        var mobileNum = $("td:eq(1) input[type=text]").val();
        var city = $("td:eq(2) input[type=text]").val();
        var pincode = $("td:eq(3) input[type=text]").val();
        var address = $("td:eq(4) input[type=text]").val();
        var gender = $("td:eq(5) select").val();
        var bio = $("td:eq(6) input[type=text]").val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.each(currentRow, function () {

            $.ajax({
                url: '/auth/updateProfileDetails',
                type: 'POST',
                async: false,
                data: {"_token": "{{ csrf_token() }}", "id": id, "fullName": fullName, "mobileNum": mobileNum,
                    "city": city, "pincode": pincode, "address": address, "gender": gender, "bio": bio},
                dataType: 'JSON',
                success: function (data) {


                    if (success = "true") {




                        $('#profilemess').html("<div class='alert alert-success'><strong>Success!</strong> SucessFully Updated</div>");
                        window.setTimeout(function () {
                            $('#profilemess').fadeOut();
                        }, 2000);
                    } else
                    {
                        $('#profilemess').html("<div class='alert alert-danger'><strong>Success!</strong> Error in Updating</div>");
                        window.setTimeout(function () {
                            $('#profilemess').fadeOut();
                        }, 2000);
                    }





                }



            });

        });


        var fullName = $("td").eq(0);

        var mobileNum = $("td").eq(1);
        var city = $("td").eq(2);
        var pincode = $("td").eq(3);

        var address = $("td").eq(4);
        //  var courseTypeSave = currentRow.find("td:eq(4) select").val();
        var gender = $("td").eq(5);

        //var gender = $("td:eq(5) option:selected").text();

        var bio = $("td").eq(6);
        var tdButtons = $("td").eq(7);

        fullName.html($("input[type=text]").val());
        mobileNum.html($("input[type=text]").val());
        city.html($("input[type=text]").val());
        pincode.html($("input[type=text]").val());
        address.html($("input[type=text]").val())
        gender.html($("select option:selected").text())
        bio.html($("input[type=text]").val())
        tdButtons.html("<button class='btnProfileEdit' data-id=" + id + ">Edit</button>");
        $(".btnProfileEdit").bind("click", profileEdit);
    }





</script>