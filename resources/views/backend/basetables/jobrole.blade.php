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
                                Functional Area
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
                                <th width="3%">Job Role</th>
                                <th width="3%">Job role category</th>
                                <th width="1%">Edit</th>
                                 <th width="1%">Delete</th>
                                </thead>
                                   <tbody><?php $i=0; ?>
                                         @foreach($data['jobrole'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                        <td>{{ $list->jobroleName }}</td>
         <td>{{ $list->rolecategoryName }}</td>
                                                         <td><button  class="btn btn-danger fa fa-pencil-square locationsedit" name="edit" value="edit" data-locid="<?php echo $list->jobroleName ?>" data-rolcatname="<?php echo $list->rolecategoryName ?>" data-locname="<?php echo $list->jobroleName ?>"></button></td>
                                                <td><button  class="btn btn-danger fa fa-trash locationsdelete" name="delete" value="Delete" data-locid="<?php echo $list->jobroleId ?>"></button></td>
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
                             <select id="rolcatname"  name="rolcatname" class="form-control">    
                               <?php foreach($getrole as $roles) 
                    { 
                                print_r($roles); ?>
                                <option value="<?php  ?>" name="role" id="role"><?php  ?></option>  
                   <?php } ?>
                </select>

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

$(document).ready(function () {
    $('.myTable').DataTable();


    $('#locations').on('click', '.locationsedit', function () {

        var locid = $(this).data('locid');

        var locname = $(this).data('locname');
         var rolcatname = $(this).data('rolcatname');
         alert(rolcatname);
        $(".modal-body .locid").val(locid);
        $(".modal-body .locname").val(locname);
         $(".modal-body .role").val(rolcatname);
        $('#editlocation').modal('show');
    });


    $('#locations').on('click', '.locationsdelete', function () {

        var locid = $(this).data('locid');


        $(".modal-body .locid").val(locid);

        $('#deletelocations').modal('show');
    });
    $("#edit_posting").click(function () {
        var formDataValues = document.forms.namedItem("jobposting");
        var formValues = new FormData(formDataValues);


        $.ajax({
            url: '/dashboard/editjobrole',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formValues,
            success: function (data) {
                if (data.success == true)
                {
                    alert("updated successfully");
                    $('#editlocation').modal('hide');
                    location.reload();
                } else
                {
                    alert(data.msg);
                    return false;
                }

            }
        });

    });
    $("#delete_posting").click(function () {
        var formDataValues = document.forms.namedItem("deleteposting");
        var formValues = new FormData(formDataValues);


        $.ajax({
            url: '/dashboard/deletejobrole',
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
            url: '/dashboard/addjobrole',
            type: 'POST',
            processData: false,
            contentType: false,
            data: formValues,
            success: function (data) {
                if (data.success == true)
                {
                    alert("Added successfully");
                    $('#addlocations').modal('hide');
                    location.reload();
                } else
                {
                    alert(data.msg);
                    return false;
                }
            }
        });

    });



});

</script>

@stop