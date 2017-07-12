@extends('backend.layouts.master')
@section('content')

<div class="container-fluid" id="content">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
                  

				
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-color box-bordered" >
                        <div class="box-title">
                            <h3>
                                    <i class="fa fa-table"></i>
                                   Locations
                            </h3>
                            <button id="location_add" style="float:right"class="primary">Add New</button>
                        </div>
                    
                    <div class="box-content nopadding" >
                        <div id="table_div">
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer" >
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer" id="myTable" role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <th width="1%">Sl-No</th>
                                <th width="3%">Locations</th>
                                </thead>
                                   <tbody><?php $i=0; ?>
                                         @foreach($data['locationlist'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                        
                                                        <td>{{ $list->locationName }}</td>
                                                </tr>
                                         @endforeach

                                     </tbody>
                              </table>
                            </div>
                        </div>
             
                       <div id="location_form" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                        <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Add New Location</div>

                                </div>     

                                <div style="padding-top:30px" class="panel-body" >

                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                    <form id="loginform" class="form-horizontal" role="form">

                                        <div style="margin-bottom: 25px" class="input-group">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                    <input id="login-username" type="text" class="form-control" name="location" value="" placeholder="Add Location">                                        
                                                </div>

                                        </form>     
                                        <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
        
                                      <a id="btn-fblogin" href="#" class="btn btn-primary">Add New</a>

                                    </div>
                                </div>
                                    </div>   
                                
                                </div>  
                          
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
    $('#myTable').DataTable();
    $('#location_add').click(function() {
       $('#table_div').hide();
        $('#location_form').show();
        
});
});
    </script>
@stop