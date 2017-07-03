<div class="col-md-12">
                        <h4>Applied Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Job Title</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
 @foreach($appliedcandidates as $key=> $list)
 <tr>
     <td><a href="#">{{ $list->userName }}</a></td>
     <td>{{ $list->jobTitle }}</td>
     <td>{{ $list->qualificationName }}</td>
     <td>{{ $list->experienceName }} </td>
     <td><a href="talentdetails/{{ $list->seekerId }}/{{ $list->userName }}">
     <input type="hidden" id="seekerId" name="seekerId" value="{{ $list->seekerId }}"> View</a></td>
     <td id="statustd_{{$key}}">
         @if( $list->status==0)
         <button id="search_email_button_{{ $key }}" class="btn btn-base btn-icon btn-icon-right  pull-right"value="" onclick="emailfunction('{{ $list->emailAddress }}',{{ $list->seekerId }},{{$key}})"> 
      <span>Call For Interview</span></button>
         @else
         <span><b>Email Sent</b></span>
         @endif
         
     </td></tr>
 @endforeach
</tbody>
</table>                                   
 </div> 
<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
<link rel="stylesheet" href="{{ url('/assets/extra/jquery-confirm.min.css') }}">
<script src="{{ url('/assets/extra/jquery-confirm.min.js')}}"></script> 
<script type="text/javascript">

     function emailfunction(emailAddress,seekerId,buttonid)
     {
       
            $.confirm({
                title: 'Confirm!',
                content: 'Do you want to send email?',
                buttons: {
                    confirm: function () {
                       
                               var postdata = {};
                                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                postdata['seekerId']=seekerId;
                                postdata['email_id']=emailAddress; 
                                postdata['button_id']=buttonid;
                                $('body').removeClass('loaded');
                                                        $.post('send/appliedemail',postdata,function(response){ 

                                                        $('body').addClass('loaded');
                                                                if(response.success)
                                                                {
                                                                    $.alert('EmailSend!');
                                                                   $('#search_email_button_'+response.buttonid).remove();
                                                                   $('#statustd_'+response.buttonid).append('<span><b>Email Sent</b></span>');
                                                                   
                                                                    
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
