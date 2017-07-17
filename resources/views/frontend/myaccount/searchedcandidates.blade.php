<div id="post-ajax">
<div class="col-md-12">
                        <h4>Searched Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
@if(count($searchcand) > 0)
 @foreach($searchcand as $key=> $list)
 <tr>
     <td><a href="#">{{ $list->userName }}</a></td>
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
 @else
 <tr>
    <td colspan=5 align="center" ><b> No Data</b></td>
 </tr>
 @endif
</tbody>
</table>                                   
 </div> 
   {{ $searchcand ->links() }}   
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
                                                        $.post('send/interviewemail',postdata,function(response){ 

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
        $(function() {
            $('#post-ajax').on('click', '.pagination a', function (e) {
               var pageno=$(this).attr('href').split('page=')[1];
               e.preventDefault();
                  $('#SearchedCandidates').empty();
             var postdata = {};
             postdata['page']=pageno;
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                $('body').removeClass('loaded');
                $.post('/company/searchedcandy',postdata,function(response){
                $('body').addClass('loaded');
                 $('#SearchedCandidates').append(response);
                  
                });
           
            });
        });


</script>
