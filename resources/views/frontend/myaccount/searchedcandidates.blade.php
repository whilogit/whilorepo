<div class="col-md-12">
                        <h4>Searched Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
 @foreach($searchcand as $key=> $list)
 <tr>
     <td><a href="#">{{ $list->userName }}</a></td>
     <td>{{ $list->qualificationName }}</td>
     <td>{{ $list->experienceName }} </td>
     <td><a href="talentdetails/{{ $list->seekerId }}/{{ $list->userName }}">
     <input type="hidden" value="{{ $list->seekerId }}"> View</a></td>
     <td><button id="search_email_button" class="btn btn-base btn-icon btn-icon-right  pull-right"value="" onclick="emailfunction('{{ $list->emailAddress }}')"> 
    <span>Call For Interview</span></button></td></tr>
 @endforeach
</tbody>
</table>                                   
 </div> 
<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
<link rel="stylesheet" href="{{ url('/assets/extra/jquery-confirm.min.css') }}">
<script src="{{ url('/assets/extra/jquery-confirm.min.js')}}"></script> 
<script type="text/javascript">

     function emailfunction(emailAddress)
     {
       
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        $.alert('Confirmed!');
                               var postdata = {};
                                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                postdata['email_id']=emailAddress;
                                postdata['subject']='Call for Interview';
                                 postdata['body']='This is a test mail ';
                                $('body').removeClass('loaded');
                                                        $.post('send/email',postdata,function(response){ 

                                                        $('body').addClass('loaded');
                                                                if(response.success)
                                                                {
                                                                   
                                                                    
                                                                }
                                                });

                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    }
                    
                }
       
            });
     }

</script>
