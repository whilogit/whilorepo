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
                                    Add Basic Details
                            </h3>
                        </div>
                    <div class="box-content nopadding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <th width="1%">Sl-No</th>
                                <th width="3%">Base Table</th>
                                </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="/dashboard/locations">Add Locations</a></td>
                                        </tr>
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
<style type="text/css" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/></style>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
    $('.myTable').DataTable();
});
    </script>
@stop