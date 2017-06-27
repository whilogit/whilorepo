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
									<span class="big">Total Projects</span>
									<span>13</span>
								</div>
							</li>
                            <li class='satgreen'>
								<i class="fa fa-money"></i>
								<div class="details">
									<span class="big">Active Projects</span>
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
						<div class="box box-color box-bordered lightgrey">
							<div class="box-title">
								<h3>
									<i class="fa fa-check"></i>Active Project</h3>
								<div class="actions">
									<a href="#new-task" data-toggle="modal" class='btn btn--icon'>
										<i class="fa fa-plus-circle"></i>Add Project</a>
								</div>
							</div>
							<div class="box-content nopadding">
								<ul class="tasklist">
									<li class='bookmarked'>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
										</div>
										<span class="task">
											<i class="fa fa-check"></i>
											<span>Approve new users</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-empty"></i>
											</a>
										</span>
									</li>
									<li>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
										</div>
										<span class="task">
											<i class="fa fa-bar-chart-o"></i>
											<span>Check statistics</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-o"></i>
											</a>
										</span>
									</li>
									<li class='done'>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue" checked>
										</div>
										<span class="task">
											<i class="fa fa-envelope"></i>
											<span>Check for new mails</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-o"></i>
											</a>
										</span>
									</li>
									<li>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
										</div>
										<span class="task">
											<i class="fa fa-comment"></i>
											<span>Chat with John Doe</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-o"></i>
											</a>
										</span>
									</li>
									<li>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
										</div>
										<span class="task">
											<i class="fa fa-retweet"></i>
											<span>Go and tweet some stuff</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-o"></i>
											</a>
										</span>
									</li>
									<li>
										<div class="check">
											<input type="checkbox" class='icheck-me' data-skin="square" data-color="blue">
										</div>
										<span class="task">
											<i class="fa fa-edit"></i>
											<span>Write an article</span>
										</span>
										<span class="task-actions">
											<a href="#" class='task-delete' rel="tooltip" title="Delete that task">
												<i class="fa fa-times"></i>
											</a>
											<a href="#" class='task-bookmark' rel="tooltip" title="Mark as important">
												<i class="fa fa-bookmark-o"></i>
											</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				
				
			</div>
		</div>
	</div> 
@endsection

@section('after-scripts-end')
@stop