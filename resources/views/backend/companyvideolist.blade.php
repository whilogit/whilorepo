@extends('backend.layouts.master')
@section('content')
<div class="container-fluid" id="content">
    <div id="main" style="margin-left: 0px;">
        <div class="container-fluid">
                    <div class="page-header">
                        <div class="pull-left">
                            <h1>Dashboard</h1>
                        </div>
              
                    </div>
        <div class="breadcrumbs">
            <ul>
                    <li>
                            <a href="more-login.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                            <a href="index.html">Video Approve</a>
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
                                <th>Company Name</th>
                                <th width="45%">YouTube Video URL</th>
                                 <th width="15%">Action</th>

                                </thead>
                                    <tbody><?php $i=0; ?>
                                         @foreach($data['video_list'] as $list) <?php $i = $i + 1; ?>
                                                <tr role="row" class="odd">
                                                        <td><?php  echo $i; ?></td>
                                                       
                                                         <td>{{ $list->companyName }}</td>
                                                           <td>{{ $list->video_url }}</td>  
                                                           <?php 
                                                           if( $list->status == 0)
                                                           {
                                                              $btn_name='Approve';
                                                              $btn_action='approve';
                                                              $color = 'color:green';
                                                           }
                                                           else
                                                           {
                                                               $btn_name='Disapprove';
                                                               $btn_action='disapprove';
                                                               $color = 'color:blue';
                                                           }
                                                           ?>
                                                           <td><button style="width: 111px;{{$color}}" id="statusbtn_{{ $list->id}}" class="actionclass" primaryid="{{ $list->id}}" fnaction="{{$btn_action}}" >{{ $btn_name }}</button></td>     
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
 $('.actionclass').unbind().bind('click', function(){
     
         var postdata = {}
         var status_id=$(this).attr('primaryid')
             postdata['primaryid']=$(this).attr('primaryid');
            postdata['fnaction']=$(this).attr('fnaction');
          $.post('/dashboard/approvevideo',postdata,function(response){
              if(response.action =='approve')
              {
                  $('#statusbtn_'+response.primaryid).attr('style', 'color:blue; width: 111px;');
                  $('#statusbtn_'+response.primaryid).attr('fnaction', 'disapprove');
                  $('#statusbtn_'+response.primaryid).html('Disapprove')
              }
              else
              {
                  $('#statusbtn_'+response.primaryid).attr('style', 'color:green; width: 111px;');
                   $('#statusbtn_'+response.primaryid).attr('fnaction', 'approve');
                   $('#statusbtn_'+response.primaryid).html('Approve')
              }
          });
        
    });
    </script>
@stop