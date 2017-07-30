@extends('backend.layouts.master')
@section('content')
<div class="container-fluid" id="content">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
         
        <div class="breadcrumbs">
            <ul>
                    <li>
                            <a href="more-login.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                            <a href="index.html">Dashboard</a>
                    </li>
            </ul>
            <div class="close-bread">

            </div>
        </div>
				
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-color box-bordered">
                        <div class="box-title">
                            <h3>
                                    <i class="fa fa-table"></i>
                                    Company list
                            </h3>
                        </div>
                    <div class="box-content nopadding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer" id="myTable" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <th width="5%">Sl-No</th>
                                <th width="1%">Logo</th>
                                <th>Company Name</th>
                                <th width="7%">Location</th>
                                <th width="7%">Mobile</th>
                                <th width="15%">Website</th>
                                <th width="8%">Options</th>
                                </thead>
                                    <tbody><?php $i=0; ?>
                                         @foreach($data['admincompanylist'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                        <td> <img style="width:100%" src="/companylogo.get/{{ $list->logoCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->logoName }}/{{ $list->crTime }}/s.{{ $list->logExt }}" alt=""></td>
                                                         <td>{{ $list->companyName }}</td>
                                                        <td>{{ $list->locationName }}</td>
                                                        <td>{{ $list->mobileNumber }}</td>
                                                        <td>{{ $list->website }}</td>
                                                <td>{!! $list->accountStatus == 0 ? "<a style='cursor:pointer'><span class='active'>Activate</span></a>" : "<a style='cursor:pointer'><span class='deactive'>Deactivate</span></a>" !!}</td>
                                                </tr>
                                         @endforeach

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
    $('#myTable').DataTable();
});
    </script>
@stop