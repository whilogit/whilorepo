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
                            <button id="data_add" style="float:right" class="primary">Add New</button>
                             
                        </div>
                    
                    <div class="box-content nopadding" >
                       
                        <div id="table_div">
                             <div class="alert alert-success message" style="display: none">
                               
                           </div>
                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer" >
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info" id="locations">
                                <thead>
                                <th width="1%">Sl-No</th>
                                <th width="3%">Locations</th>
                                <th width="1%">Edit</th>
                                 <th width="1%">Delete</th>
                                </thead>
                                   <tbody><?php $i=0; ?>
                                         @foreach($data['locationlist'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                        <td>{{ $list->locationName }}</td>
                                                         <td><button  class="btn btn-danger fa fa-pencil-square locationsedit" name="edit" value="edit" data-locid="<?php echo $list->locationId ?>" data-locname="<?php echo $list->locationName ?>"></button></td>
                                                          <td><button  class="btn btn-danger fa fa-trash locationsdelete" name="delete" value="Delete" data-locid="<?php echo $list->locationId ?>"></button></td>
                                                </tr>
                                         @endforeach

                                     </tbody>
                              </table>
                            </div>
                        </div>
             
                       <div style="margin-top:50px; display:none" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 addcontent_form">                    
                         
                            <a href="/dashboard/locations" class="circle-tile-footer">Go Back <i class="fa fa-arrow-left"></i></a>
                           <div class="alert alert-success message" style="display: none">
                               
                           </div>
                           <div class="panel panel-info" >
                                <div class="panel-heading">
                                    <div class="panel-title">Add New Location</div>

                                </div>     

                                <div style="padding-top:30px" class="panel-body" >
                                  
                                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                                    <form id="loginform" class="form-horizontal" role="form">

                                        <div style="margin-bottom: 25px" class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                                                    <input type='hidden' id='loc_id_hidden' value="">
                                                    <input id="location" type="text" class="form-control" name="location" value="" placeholder="Add Location">                                        
                                                </div>

                                        </form>     
                                        <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
        
                                     <button id="data_insert" style="float:right"class="primary">Add Location</button>
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
<!-- Modify Modal-->

            <div class="modal fade modal-middle" id="editlocation" role="dialog" style="display: none;">
                <div class="modal-dialog modal-md">

                    <!-- Popup contents-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Modify</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                     <form id="jobposting" class="form-horizontal" role="form">

                                        
                                                    
                                                    <input type="hidden" class="locid"  name="locid" value="">
                                                    <input class="locname" type="text"  name="locname" value="">                                        
                                               

                                        </form>    
                                </div>

                            </div>											

                        </div>

                        <div class="modal-footer">
                            <button type="reset" id="edit_posting" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Update</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /.Modify Modal -->
            <!-- Delete Modal-->

            <div class="modal fade modal-middle" id="deletelocations" role="dialog" style="display: none;">
                <div class="modal-dialog modal-sm">

                    <!-- Popup contents-->
                    <div class="modal-content">
                        <div class="modal-header delete-modal-header">
                            <button type="button" class="close" data-dismiss="modal">×</button>
                            <h4 class="modal-title">Delete</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="deleteposting">                                      
                                      {!! csrf_field() !!}
                                        <input type="hidden" class="locid"  name="locid" value="">
                                    <p class="text-center">Are you sure want to delete this item?</p>
                                    </form>
                                </div>

                            </div>											

                        </div>

                        <div class="modal-footer">
                            <button type="button" id="delete_posting" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                            <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /.Delete Modal-->
 <!-- Add Modal-->

            <div class="modal fade modal-middle" id="addlocations" role="dialog" style="display: none;">
                <div class="modal-dialog modal-sm">

                    <!-- Popup contents-->
                    <div class="modal-content">
                        <div class="modal-header delete-modal-header">
                            
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form id="addposting">                                      
                                      {!! csrf_field() !!}
                                        <input type="hidden" class="locid"  name="locid" value="">
                                   <input type="text" class="addlocation"  name="addlocation" value="">
                                    </form>
                                   
                                </div>

                            </div>											

                        </div>

                        <div class="modal-footer">
                            <button type="button" id="add_posting" class="btn btn-success"><i class="fa fa-floppy-o" aria-hidden="true"></i> Add</button>
                            <button type="reset" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /.Add Modal-->

@endsection

@section('after-scripts-end')
<style type="text/css" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/></style>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
   /* function edit_data(locid,locname)
    {
            var postdata = {};
            alert(locname);
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
            $('#table_div').hide();
            $('.addcontent_form').show();
            $('.panel-title').replaceWith('Edit Location');
            $('#data_insert').hide();
            $('#data_update').show();
            $('#location').val(locname);
            $('#loc_id_hidden').val(locid);
     
    }
    function delete_data(locid)
    { 
            var txt;
            var postdata = {};
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
            postdata['locat_id']=locid;
            var r = confirm("Do you waht to delete!");
            if (r == true) {
                  $.post('/dashboard/deletelocation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                         
                                          $('#loader').hide();
                                          $('.message').show();
                                          $('.message').html('<strong>Deleted!</strong>Location Deleted successfully.');
                                          location.href = "/dashboard/locations";
                                            
                                      }
                                     else
                                      {
                                         alert('Cannot delete. This location is used in other places');
                                      }
                                      
                                      
                                  });
            } 
        
    }*/
    $(document).ready(function(){
    $('.myTable').DataTable();
    
  /*  $('#data_add').click(function() {
       $('#table_div').hide();
        $('.addcontent_form').show();
      
});
   $('#data_insert').click(function() {
                        var location = $('#location').val();
                               var postdata = {};
                              postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                              postdata['location']=location;
                              $('body').removeClass('loaded');
                              $.post('/dashboard/addlocation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                          $('#loader').hide();
                                          $('.message').show();
                                         $('.message').html('<strong>Added!</strong>Location Deleted successfully.')
                                            
                                      }
                                     
                                  });
           });*/
 /*$('#data_update').click(function() {
                               var postdata = {};
                              postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
                              postdata['locationid']=$('#loc_id_hidden').val();
                              postdata['locname']= $('#location').val();
                              $('body').removeClass('loaded');
                              $.post('/dashboard/editlocation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                          $('#loader').hide();
                                          $('.message').show();
                                         $('.message').html('<strong>Added!</strong>Location Updated successfully.')
                                            
                                      }
                                      
                                  });
           });*/
          // $(".locationsedit").click(function () {
         /* function delete_data(locid)
    { 
        alert(locid);
            var txt;
            var postdata = {};
            postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
            postdata['locat_id']=locid;
            var r = confirm("Do you waht to delete!");
            if (r == true) {
                  $.post('/dashboard/deletelocation',postdata,function(response)
                                  {
                                      if(response.success)
                                      {
                                         
                                          $('#loader').hide();
                                          $('.message').show();
                                          $('.message').html('<strong>Deleted!</strong>Location Deleted successfully.');
                                          location.href = "/dashboard/locations";
                                            
                                      }
                                     else
                                      {
                                         alert('Cannot delete. This location is used in other places');
                                      }
                                      
                                      
                                  });
            } 
        
    }*/
                  $('#locations').on('click', '.locationsedit', function(){
        
         var locid = $(this).data('locid');
      
          var locname = $(this).data('locname');
           $(".modal-body .locid").val(locid);
            $(".modal-body .locname").val(locname);
         
        $('#editlocation').modal('show');
    });
               $("#data_add").click(function () {
        
         /*var locid = $(this).data('locid');
      
          var locname = $(this).data('locname');
           $(".modal-body .locid").val(locid);
            $(".modal-body .locname").val(locname);
         
        $('#editlocation').modal('show');*/
        
    });
    
            $('#locations').on('click', '.locationsdelete', function(){
        
         var locid = $(this).data('locid');
      
         
           $(".modal-body .locid").val(locid);
          
        $('#deletelocations').modal('show');
    });
        $("#edit_posting").click(function () {
            var formDataValues = document.forms.namedItem("jobposting");
                  var formValues = new FormData(formDataValues); 
           
           
          $.ajax({
                url: '/dashboard/editlocation',
                type: 'POST',
           processData: false,
                      contentType: false,
                      data: formValues,
                success: function (data) {
                   
                    alert("updated successfully");
                    
                   $('#editlocation').modal('hide');
                  location.reload();
                }
            });
            
        });
        $("#delete_posting").click(function () {
            var formDataValues = document.forms.namedItem("deleteposting");
                  var formValues = new FormData(formDataValues); 
           
           
          $.ajax({
                url: '/dashboard/deletelocation',
                type: 'POST',
           processData: false,
                      contentType: false,
                      data: formValues,
                success: function (data) {
                   
                    alert("Deleted successfully");
                    
                   $('#deletelocations').modal('hide');
                  location.reload();
                }
            });
            
        });
        
         $("#data_add").click(function () {
             
        $('#addlocations').modal('show');
             
         });
         
           $("#add_posting").click(function () {
            var formDataValues = document.forms.namedItem("addposting");
                  var formValues = new FormData(formDataValues); 
           
          $.ajax({
                url: '/dashboard/addlocation',
                type: 'POST',
           processData: false,
                      contentType: false,
                      data: formValues,
                success: function (data) {
                   
                    alert("Added successfully");
                    
                   $('#addlocations').modal('hide');
                  location.reload();
                }
            });
            
        });
        
    
    
});

    </script>
    
@stop