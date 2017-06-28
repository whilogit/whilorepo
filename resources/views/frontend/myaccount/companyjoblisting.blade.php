<div class="panel panel-default">

  <div class="panel-body">
         <h4 class="col-md-4 pull-left">Posted Jobs</h4><table class="table table-orders table-bordered table-striped table-responsive no-margin">


                                        <tbody>
                                            <tr><th>Job Title</th><th>Valid Till</th><th>Location</th><th>Edit</th></tr>
                                            
                                            @foreach($jobdetails as $key=> $list)
                                            <tr><td><a href="#"></a> {{ $list->jobTitle }}</td><td>{{ $list->lastdate }}</td><td>{{ $list->locationName }}</td><td><i class="fa fa-pencil"></i></td></tr>
                                               @endforeach
</tbody>
</table>
</div>
</div>
