<h4>Shortlisted Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>Status</th></tr>
 @foreach($shortlist as $key=> $list)
<tr>
    <td><a href="#">{{ $list->userName }}</a></td>
    <td>{{ $list->qualificationName }}</td>
    <td>{{ $list->experienceName }} </td>
    <td id="statustd_{{$key}}">
        @if( $list->status==0)
            <select id="status_{{$key}}" onchange="sendmail('{{ $list->emailAddress }}',{{ $list->seekerId }},{{$key}})">
            <option>Choose</option>
            <option  id="selected_{{$key}}" value="selected">Selected</option>
            <option  id="rejected_{{$key}}" value="rejected">Rejected</option>
            </select>
         @elseif($list->status==1)
         <span><b>Selected Candidate</b></span>
         @else
          <span><b>Rejected Candidate</b></span>
         @endif
    </td>
    
</tr>
 @endforeach
</tbody>
</table>       
<script src="{{ url('/assets/extra/jquery_new.min.js')}}"></script>
<link rel="stylesheet" href="{{ url('/assets/extra/jquery-confirm.min.css') }}">
<script src="{{ url('/assets/extra/jquery-confirm.min.js')}}"></script> 
<script type="text/javascript">

     function sendmail(emailAddress,seekerId,buttonid)
     {
        var option =$('#status_'+buttonid).val();
                 $.confirm({
                title: 'Confirm!',
                content: 'Do you want to update status?',
                buttons: {
                    confirm: function () {
                       
                               var postdata = {};
                                postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                                postdata['seekerId']=seekerId;
                                postdata['email_id']=emailAddress; 
                                postdata['button_id']=buttonid;
                                postdata['status_option']=option;
                                $('body').removeClass('loaded');
                                                        $.post('send/shortliststatus',postdata,function(response){ 

                                                        $('body').addClass('loaded');
                                                                if(response.success)
                                                                {
                                                                    
                                                                   $.alert('Status Updated!');
                                                                   $('#status_'+response.buttonid).remove();
                                                                   $('#statustd_'+response.buttonid).append('<span><b>'+response.msg+'</b></span>');
                                                                    
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
