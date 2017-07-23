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
                            <a href="index.html">Add New</a>
                    </li>
            </ul>
            <div class="close-bread">

            </div>
        </div>
				
     <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dcalendar.picker.css" rel="stylesheet">
<style type="text/css">
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/dcalendar.picker.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();

		    var max_fields = 10; //maximum input boxes allowed
		    var x = 1; //initlal text box count
		
		$('#add').click(function () {		   
			if(x < max_fields){ //max input box allowed
			    x++; //text box increment
			    $("#addblock").before('<div class="col-md-12 col-sm-12" id="deceased">	<a href="#" class="remove_field" title="Remove">X</a>	<div class="form-group col-md-3 col-sm-3">            <label for="name">Name*</label>            <input type="text" class="form-control input-sm" id="name" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="gender">Gender*</label>            <input type="text" class="form-control input-sm" id="gender" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="age">Age*</label>            <input type="text" class="form-control input-sm" id="age" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOB">Date of Birth or Exact Birth Year*</label>            <input type="text" class="form-control input-sm datepicker" id="DOB'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOD">Date of Death or Exact Death Year*</label>             <input type="text" class="form-control input-sm datepicker" id="DOD'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="mother">Deceased Person\'s Mother Name*</label>            <input type="text" class="form-control input-sm" id="mother" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="father">Deceased Person\'s Father Name*</label>            <input type="text" class="form-control input-sm" id="father" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">	    <label for="photo">Upload Photo*</label>	    <input type="file" id="photo">	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>	</div></div>');

				$('.datepicker').dcalendarpicker();
			}  else{
				alert("Only 10 Names Allowed");
			}  
		});
		$(document).on('click', '.remove_field', function(e){
		        e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});

		
	});
	</script>
  </head>
  <body>
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body">
    <form>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">Company/consultancy<span style="color:red">*</span></label>
             <select  required="required" name="registertype" class="form-control">
                                                               <option value="">-Select-</option>
                                                               <option value="1">Company</option>
                                                               <option value="2">Consultancy</option>
                                                               </select>
        </div>
            <div class="form-group col-md-6 col-sm-6">
            <label for="email">Company/consultancy Name<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm" id="email" placeholder="">
        </div>

        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Username<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm" id="mobile" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Email Address<span style="color:red">*</span></label>
	      <input type="email" class="form-control input-sm" id="mobile" placeholder="">
	   </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">Password<span style="color:red">*</span></label>
            <input type="password" class="form-control input-sm" id="city" placeholder="">
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">Re-Password<span style="color:red">*</span></label>
            <input type="password" class="form-control input-sm" id="state" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="country">Phone</label>
            <input type="text" class="form-control input-sm" id="country" placeholder="">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Mobile<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Website<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>

	<div class = "form-group col-md-6 col-sm-6">
	       <label for="pincode">Industry<span style="color:red">*</span></label>
	      <select name="industry" required="required"><option value=""  selected="selected" disabled="disabled">-Select Industry-</option>
                                                    @foreach($industry as $list)
                                                    <option value="{{ $list->industryId }}">{{ $list->industryName }}</option>
                                                    @endforeach
                                                    </select>
	</div>

	<div class = "form-group col-md-6 col-sm-6">
	         <label for="pincode">Location<span style="color:red">*</span></label>
	     <select name="location" required="required">
                                                        <option value="" selected="" disabled="">Location</option>
                                                            @foreach ($locations as $location)
                                                             <option value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                                        @endforeach
                                                      </select>
	</div>

	    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">City</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>

	    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Pin code</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder="">
        </div>
</div>
<div class="col-md-12 col-sm-12" id="deceased">
	<div class="form-group col-md-3 col-sm-3">
            <label for="name">About Company/Consultancy <span style="color:red">*</span</label>
            <textarea class="form-control input-sm" id="address" data-parsley-minlength="30" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 30 characters"></textarea>
        </div>
	<div class = "form-group col-md-6 col-sm-6">
	         <label for="pincode">Choose Plan<span style="color:red">*</span></label>
	     <select name="location" required="required">
                                                   
                                                          
                                                               <option value="">-Select-</option>
                                                               <option value="1">Plan 1</option>
                                                               <option value="2">Plan 2</option>
                                                                <option value="2">Plan 3</option>
                                                             
                                                      </select>
	</div>
	
</div>


<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-3 col-sm-3 pull-right" >
			<input type="submit" class="btn btn-primary" value="Submit"/>
	</div>
</div>
</form>
</div>
</body>
</html>
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