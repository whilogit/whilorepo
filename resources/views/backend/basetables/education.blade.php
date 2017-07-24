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
                                   Eductaion
                            </h3>
                            <button id="data_add" style="float:right"class="primary">Add New</button>
                             
                        </div>
                    
                    <div class="box-content nopadding" >
                       
                        <div id="table_div">
                             <div class="alert alert-success message" style="display: none">
                               
                           </div>
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer" >
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                <th width="1%">Sl-No</th>
                                <th width="3%">Eductaion Name</th>
                                <th width="1%">Edit</th>
                                 <th width="1%">Delete</th>
                                </thead>
                                   <tbody><?php $i=0; ?>
                                         @foreach($data['education'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                        <td>{{ $list->educationName }}</td>
                                                         <td><button  class="btn btn-danger fa fa-pencil-square" name="edit" value="edit" onclick="edit_data({{ $list->educationId }},'{{ $list->educationName }}')"></button></td>
                                                          <td><button  class="btn btn-danger fa fa-trash" name="delete" value="Delete" onclick="delete_data({{ $list->educationId }})"></button></td>
                                                </tr>
                                         @endforeach

                                     </tbody>
                              </table>
                            </div>
                        </div>
             
                       <div style="margin-top:50px; display:none" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 addcontent_form">                    
                         
                            <a href="/dashboard/education" class="circle-tile-footer">Go Back <i class="fa fa-arrow-left"></i></a>
                           <div class="alert alert-success message" style="display: none">
                               
                           </div>
                           <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Add New Education</div>

                                </div>     

                                <div style="padding-top:30px" class="panel-body" >
                                  
                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                    <form id="loginform" class="form-horizontal" role="form">

                                        <div style="margin-bottom: 25px" class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                                    <input type='hidden' id='edu_id_hidden' value="">
                                                    <input id="education" type="text" class="form-control" name="education" value="" placeholder="Add Eductaion">                                        
                                                </div>

                                        </form>     
                                        <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
        
                                     <button id="data_insert" style="float:right"class="primary">Add Education</button>
                                     <button id="data_update" style="display:none;float:right"class="primary">Update</button>

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
    function edit_data(eduid,eduname)
    {
            var postdata = {};
            alert(locname);
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
            $('#table_div').hide();
            $('.addcontent_form').show();
            $('.panel-title').replaceWith('Edit Education');
            $('#data_insert').hide();
            $('#data_update').show();
            $('#education').val(locname);
            $('#edu_id_hidden').val(locid);
     
    }
    function delete_data(eduid)
    { 
            var txt;
            var postdata = {};
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
            postdata['edu_id']=eduid;
            var r = confirm("Do you waht to delete!");
            if (r == true) {
                  $.post('/dashboard/deleteeducation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                         
                                          $('#loader').hide();
                                          $('.message').show();
                                          $('.message').html('<strong>Added!</strong>Eductaion Deleted successfully.');
                                          location.href = "/dashboard/education";
                                            
                                      }
                                     else
                                      {
                                         alert('Cannot delete. This eductaion is used in other places');
                                      }
                                      
                                      
                                  });
            } 
        
    }
    $(document).ready(function(){
    $('.myTable').DataTable();
    
    $('#data_add').click(function() {
       $('#table_div').hide();
        $('.addcontent_form').show();
      
});
   $('#data_insert').click(function() {
                        var education = $('#education').val();
                               var postdata = {};
                              postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                              postdata['education']=education;
                              $('body').removeClass('loaded');
                              $.post('/dashboard/addeducation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                          $('#loader').hide();
                                          $('.message').show();
                                         $('.message').html('<strong>Deleted!</strong>Education Deleted successfully.')
                                            
                                      }
                                     
                                  });
           });
 $('#data_update').click(function() {
                               var postdata = {};
                              postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                              postdata['educationid']=$('#edu_id_hidden').val();
                              postdata['eduname']= $('#education').val();
                              $('body').removeClass('loaded');
                              $.post('/dashboard/editeducation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                          $('#loader').hide();
                                          $('.message').show();
                                         $('.message').html('<strong>Added!</strong>Eductaion Updated successfully.')
                                            
                                      }
                                      
                                  });
           });
});
    </script>
@stop