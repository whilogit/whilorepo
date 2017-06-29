<div class="col-md-12">
<h4>Applied Candidates</h4>
        <table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Job Title</th><th>Qualification</th><th>Experience</th><th>View Profile</th><th>Status</th></tr>
 @foreach($appliedcandidates as $key=> $list)
<tr><td><a href="#">{{ $list->userName }}</a></td><td>{{ $list->jobTitle }}</td><td>{{ $list->qualificationName }}</td><td>{{ $list->experienceName }} </td><td><a href="">View</a></td><td><a href="">Call For Interview</a></td></tr>
@endforeach
</tbody>
</table>                     
                         
                       
                    </div>