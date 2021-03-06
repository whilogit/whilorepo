    @extends('frontend.layouts.master_side')
    <div class="panel panel-default">
         <div id="message">
        
                                     </div>
    <div class="panel-body">
            <h4 class="col-md-4 pull-left">Posted Jobs</h4>
             
            <div id="post-ajax">
       
            <div id="job_detail_table" >
           
            <table class="table table-orders table-bordered table-striped table-responsive no-margin">


                                            <tbody>
                                                <tr><th>Job Title</th><th>Valid Till</th><th>Location</th><th>Edit</th></tr>
                                                @if(count($jobdetails) > 0)
                                                @foreach($jobdetails as $key=> $list)
                                                    <tr>
                                                        <td><a href="#"></a> {{ $list->jobTitle }}</td>
                                                        <td>{{ $list->lastdate }}</td>
                                                        <td>{{ $list->locationName }}</td>
                                                        <td><input type="hidden" class="job_id" value="{{ $list->jobId }}">
                                                        <button class="btn btn-base btn-icon btn-icon-right  pull-right jobedit" id="edit_{{$key}}" value="" onclick="jobfunction({{ $list->jobId }})"> 
                                                        <span>Edit</span></button>

                                                        </td>
                                                    </tr>
                                                @endforeach
                                                @else
                                    <tr>
                                        <td colspan=5 align="center" ><b> No Data</b></td>
                                    </tr>
                                    @endif
                </tbody>
                </table>
                {{ $jobdetails ->links() }} 
            </div> 
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
                                                                <td><input type="hidden" name="hide_jid" id="hide_jid" class="job_id" value="">
                                                                <input type="text" name="jobtitle" id="jobtitle"required="required" value="">
                                                        </label>
                                                        </div>     
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            <div class="form-group">
                                                            <label class="label">Valid Till <span style="color:red">*</span></label>
                                                                <label class="input">

                                                                <input type="text" name="validtill" id="validtill" required="required" value="">
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
    <script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
    <script type="text/javascript">
        function jobfunction(id)
        {

            $('#job_detail_table').hide();

                    var postdata = {};
                    postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                    postdata['job_id']=id;
                    $('body').removeClass('loaded');
                                            $.post('/company/editjobs',postdata,function(response){ 

                                            $('body').addClass('loaded');
                                                    if(response.success)
                                                    {
                                                        var jobtitle=response.jdetails.jobTitle;
                                                        var validtill=response.jdetails.lastdate;
                                                        var jobId=response.jdetails.jobId;
                                                        $('#hide_jid').val(jobId);
                                                        $('#jobtitle').val(jobtitle);
                                                        $('#validtill').val(validtill);
                                                        $('#edit_posted_job').show();

                                                    }
        });
        }
        $(function() {


    $('#job_detail_update').click(function()
            { 

                var postdata = {};
                var input = $('[name=update_job_details]').serialize();
                postdata['_token'] = $('meta[name="csrf-token"]').attr('content');
                postdata['jobid']=$('input[name="hide_jid"]').val();
                postdata['jobtitle']=$('input[name="jobtitle"]').val();
                postdata['validtill']=$('input[name="validtill"]').val();
		var expireDateStr = $("#validtill").val();
                var expireDateArr = expireDateStr.split("-");
                var expireDate = new Date(expireDateArr[2], expireDateArr[0], expireDateArr[1]);
                var todayDate = new Date();
                   if (todayDate < expireDate) {
                    $('body').removeClass('loaded');
                                            $.post('/company/updatejob',postdata,function(response){ 

                                            $('body').addClass('loaded');
                                                    if(response.success)
                                                    {

                                                    $('#message').html('<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Updated!</strong> Job details updated sucessfully </div>');

                                                    }

            });
            }
            else
            {
            	  $('#message').html('<div class="alert alert-warning"><a href="#" class="close" data-dismiss="alert">&times;</a><strong>Invalid!</strong> Date Entered is invalid</div>');
            }

    });
    });
    $(function() {
                $('#post-ajax').on('click', '.pagination a', function (e) {
                var pageno=$(this).attr('href').split('page=')[1];
                e.preventDefault();

                    $('#postedjobs').empty();
                var postdata = {};
                postdata['page']=pageno;
                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                    $('body').removeClass('loaded');
                    $.post('/company/postedjobs',postdata,function(response){
                    $('body').addClass('loaded');
                    $('#postedjobs').append(response);

                    });
                });
            });
    </script>
    <script>
    $( function() {

            var today = new Date(); 
                    var dd = today.getDate() + 1;
                    var mm = today.getMonth()+1; //January is 0!
                    var yyyy = today.getFullYear();
        $( "[name=validtill]" ).datepicker({
                    dateFormat: "dd-mm-yy",
                    defaultDate: +1,
                    minDate: new Date(yyyy, mm , dd)
            });
    } );
    </script>
