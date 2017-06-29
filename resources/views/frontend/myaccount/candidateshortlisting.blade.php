<h4>Shortlisted Candidates</h4>
<table class="table table-orders table-bordered table-striped table-responsive no-margin">
<tbody>
<tr><th>Name</th><th>Qualification</th><th>Experience</th><th>Status</th></tr>
 @foreach($shortlist as $key=> $list)
<tr><td><a href="#">{{ $list->userName }}</a></td><td>{{ $list->qualificationName }}</td><td>{{ $list->experienceName }} </td><td><select><option>Selected</option><option>Rejected</option></select></td></tr>
 @endforeach
</tbody>
</table>       
