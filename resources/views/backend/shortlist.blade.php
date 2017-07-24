@extends('backend.layouts.master')
@section('content')
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container-fluid" id="content">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
                   
        		
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-color box-bordered">
                        <div class="box-title">
                            <h3>
                                    <i class="fa fa-table"></i>
                                    Shortlist Candidates
                            </h3>
                        </div>
                    <div class="box-content nopadding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    
                                <th width="5%">Sl-No</th>
                                <th>Candidate Name</th>
                                <th width="15%">Candiate EmailAddress</th>
                                <th width="7%">Company Name</th>
                                
                                
                                <th width="15%">ShortlistedDate</th>
                                </thead>
                               
                                    <tbody><?php $i=0; ?>
                                        @if(count($data)>0)
                                         @foreach($data['company_jobs'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                         <td>{{ $list->userName }}</td>
                                                        <td>{{ $list->emailAddress }}</td>
                                                        <td>{{ $list->companyName }}</td>
                                                        <td>{{ $list->ShortlistedDate }}</td>
                                                       

                                                
                                                </tr>
                                         @endforeach
                                         @endif

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
@endsection

@section('after-scripts-end')
<script type="text/javascript" src="/admin/app/companylist.js"></script>
<style type="text/css" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/></style>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
    $('.myTable').DataTable();
});
    </script>
@stop