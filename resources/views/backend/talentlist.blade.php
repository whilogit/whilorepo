@extends('backend.layouts.master')
@section('content')
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
							<li class='lightred'>
								<i class="fa fa-calendar"></i>
								<div class="details">
									<span class="big">February 22, 2013</span>
									<span>Wednesday, 13:56</span>
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
					Talents list
				</h3>
			</div>
			<div class="box-content nopadding">
			<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                             <table class="table table-hover table-nomargin table-bordered dataTable no-footer myTable"  role="grid" aria-describedby="DataTables_Table_0_info">
                                <thead>
                                    
					<th width="5%">Sl-No</th>
                    <th width="1%">Profile Image</th>
                    <th>User Name</th>
                    <th width="7%">Location</th>
                    <th width="7%">Mobile</th>
                    <th width="15%">Gender</th>
                    <th width="8%">Options</th>
                    </thead>
					<tbody><?php $i=0; ?>
                                             @if(count($data)>0)
                    @foreach($data['talents'] as $list) <?php $i = $i + 1; ?>
					<tr role="row" class="odd">
						<td><?php  echo $i; ?></td>
						<td> <img style="width:100%" src="/companylogo.get/{{ $list->imageCategory }}/{{ $list->dirYear }}/{{ $list->dirMonth }}/{{ $list->imageName }}/{{ $list->crTime }}/s.{{ $list->imgExt }}" alt=""></td>
                        <td>{{ $list->firstName }} {{ $list->lastName }}</td>
						<td>{{ $list->locationName }}</td>
						<td>{{ $list->mobileNumber }}</td>
						<td>{{ $list->Gender == 1 ? "Male" : "Female"  }}</td>
                        <td>-Seelct-</td>
					</tr>
                     
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

<style type="text/css" src="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css"/></style>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function(){
    $('.myTable').DataTable();
});
    </script>
@stop