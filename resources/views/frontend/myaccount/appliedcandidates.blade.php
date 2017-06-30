<div class="col-md-12">
<h4>Applied Candidates</h4>
        <table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Job Title</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
 @foreach($appliedcandidates as $key=> $list)
 <tr><td><a href="#">{{ $list->userName }}</a></td><td>{{ $list->jobTitle }}</td><td>{{ $list->qualificationName }}</td><td>{{ $list->experienceName }} </td><td><a href="talentdetails/{{ $list->seekerId }}/{{ $list->userName }}"><input type="hidden" value="{{ $list->seekerId }}"> View</a></td><td><button id="email_button" class="btn btn-base btn-icon btn-icon-right  pull-right"value=""> <span>Call For Interview</span></button></td></tr>
@endforeach
</tbody>
</table>                     
       
                    </div>

<script type="text/javascript">
$(function() {
   
       $('#email_button').click(function()
        { 
            
            $.confirm({
                title: 'Confirm!',
                content: 'Simple confirm!',
                buttons: {
                    confirm: function () {
                        $.alert('Confirmed!');
                       
                    },
                    cancel: function () {
                        $.alert('Canceled!');
                    },
                    somethingElse: {
                        text: 'Something else',
                        btnClass: 'btn-blue',
                        keys: ['enter', 'shift'],
                        action: function(){
                            $.alert('Something else?');
                        }
                    }
                }
});
                   
        });
  
});
</script>