@extends('backend.layouts.master')
@section('content')
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container-fluid" id="content">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
                    <div class="page-header">
                        <div class="pull-left">
                            <h1>Dashboard</h1>
                        </div>
                        <div class="pull-right">
                            <ul class="stats">
                                <li class='satgreen'>
                                    <i class="fa fa-money"></i>
                                        <div class="details">
                                                <span class="big">Total Company</span>
                                                <span>13</span>
                                        </div>
                                </li>
                                    <li class='satgreen'>
                                        <i class="fa fa-money"></i>
                                        <div class="details">
                                                <span class="big">Total users</span>
                                                <span>5</span>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                    </div>
        <div class="breadcrumbs">
            <ul>
                    <li>
                            <a href="more-login.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                            <a href="index.html">Payment Details</a>
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
                                   Company Payment Details
                            </h3>
                        </div>
                    <div class="box-content nopadding">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <th width="5%">Sl-No</th>
                                <th>Company Name</th>
                                <th width="7%">Order Id</th>
                                <th width="15%">Tracking Id</th>
                                <th width="15%">Bank Reference No</th>
                                <th width="15%">Order Status</th>
                                <th width="15%">Payment Mode</th>
                                <th width="15%">Amount</th>
                                <th width="15%">Payment Date</th>
                                </thead>
                               
                                    <tbody><?php $i=0; ?>
                                        @if(count($data)>0)
                                         @foreach($data['company_payments'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                         <td>{{ $list->companyName }}</td>
                                                        <td>{{ $list->order_id }}</td>
                                                        <td>{{ $list->tracking_id }}</td>
                                                        <td>{{ $list->bank_ref_no }}</td>
                                                        <td>{{ $list->order_status }}</td>
                                                        <td>{{ $list->payment_mode }}</td>
                                                         <td>{{ $list->amount }}</td>
                                                        <td>{{ $list->createdDate }}</td>
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