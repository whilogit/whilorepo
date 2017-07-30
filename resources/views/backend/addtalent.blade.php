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
          
                    </div>
        <div class="breadcrumbs">
            <ul>
                    <li>
                            <a href="more-login.html">Home</a>
                            <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                            <a href="index.html">Add New Talents</a>
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



  </head>
  <body>
      
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Talent Registration Form</h3>
	</div>
<div class="panel-body">
        <div class="col-md-6"><br>
                                                    <ul class="list-check responsereport" style="display:none;color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div>
    <form name="addtalent" id="addtalent">

	<div class="form-group col-md-12 col-sm-12">
     
        <div class="form-group col-md-6 col-sm-6">
            <label for="mobile">Username<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm" required="required" name="username" data-parsley-type="alphanum" data-parsley-minlength="6" data-parsley-maxlength="25" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" placeholder="username">
        </div>
                                    

	<div class="form-group col-md-6 col-sm-6">
	      <label for="address">Email Address<span style="color:red">*</span></label>
	      <input type="email" class="form-control input-sm" data-parsley-maxlength="99" data-parsley-minlength="5" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" name="email" placeholder="Email Address">
	   </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="city">Password<span style="color:red">*</span></label>
              <input type="password" class="form-control input-sm" data-parsley-maxlength="25" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" id="password" name="password" placeholder="Password">
        </div>
	
	<div class="form-group col-md-6 col-sm-6">
            <label for="state">Re-Password<span style="color:red">*</span></label>
             <input type="password" class="form-control input-sm"data-parsley-equalto="#password"  data-parsley-maxlength="25" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" name="repassword" placeholder="Re-Password">
        </div>
<div class="form-group col-md-6 col-sm-6">
            <label for="country">First Name</label>
             <input type="text" class="form-control input-sm" required="required" name="fname" data-parsley-type="alphanum" data-parsley-minlength="6" data-parsley-maxlength="25" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" placeholder="first name">
        </div>
<div class="form-group col-md-6 col-sm-6">
            <label for="country">Last Name</label>
             <input type="text" class="form-control input-sm"  name="lname" data-parsley-type="alphanum" data-parsley-minlength="6" data-parsley-maxlength="25" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" placeholder="last name">
        </div>

	

	<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Mobile<span style="color:red">*</span></label>
           <input type="text" class="form-control input-sm"data-parsley-minlength="10" data-parsley-maxlength="13" data-parsley-maxlength-message="Max length 13 number" data-parsley-minlength-message="Minlength 10 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" required="required" name="mobile" placeholder="Mobile">
        </div>
    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Gender<span style="color:red">*</span></label>
            <select name="gender" required="required" class="form-control">
                                                        <option value="" selected="" disabled="">Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="0">Female</option>
                                                        </select>
        </div>


	<div class = "form-group col-md-3 col-sm-3">
	         <label for="pincode">Location<span style="color:red">*</span></label>
	     <select name="location" required="required"  class="form-control">
                                                        <option value="" selected="" disabled="">Location</option>
                                                            @foreach ($locations as $location)
                                                             <option value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                                        @endforeach
                                                      </select>
	</div>

	    <div class="form-group col-md-3 col-sm-3">
            <label for="pincode">City</label>
              <input type="text" class="form-control input-sm" data-parsley-minlength="3" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 3 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" name="city" placeholder="City">
        </div>
   
	    <div class="form-group col-md-3 col-sm-3">
            <label for="pincode">Pin code</label>
               <input type="text" class="form-control input-sm" data-parsley-minlength="2" data-parsley-type="digits" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 digits" data-parsley-minlength-message="Min length 2 digits" data-parsley-type-message="Only digits" data-parsley-trigger="keyup" name="pincode" placeholder="Pin code">
        </div>
             
    <div class="col-md-12 col-sm-12" id="deceased">
               <div class="form-group col-md-6 col-sm-6">
            <label for="name">Address <span style="color:red">*</span</label>
            <textarea class="form-control input-lg" name="address" id="address" data-parsley-minlength="10" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 10 characters" style="width:400px;"></textarea>
        </div>
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">About Talent <span style="color:red">*</span</label>
            <textarea class="form-control input-lg" name="aboutbio" id="aboutbio" data-parsley-minlength="30" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 30 characters" style="width:400px;"></textarea>
        </div>
 
	
	
</div>
    </div>
            
<div class="col-md-6 col-sm-6">
    <div class="form-group col-md-3 col-sm-3 pull-right" style="float:right;" >

                        <button id="add_new" class="btn btn-primary" type="button">
                                                        <span>Submit</span>
                                                    </button>
	</div>
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
<script>
  $(document).ready(function(){
                
    $('#add_new').click(function() {
      var postdata = {}
        //var input = $('[name=addCompanyForm]').serialize();
        //postdata['_token'] = $('meta[name="csrf-token"]').attr('content'); 
        var proceed = $('form[name=addtalent]').parsley().validate();
        postdata['username']=$('input[name="username"]').val();
        postdata['fname']=$('input[name="fname"]').val();
        postdata['lname']=$('input[name="lname"]').val();
        postdata['email']=$('input[name="email"]').val();
        postdata['password']=$('input[name="password"]').val();
        postdata['repassword']=$('input[name="repassword"]').val();
        postdata['mobile']=$('input[name="mobile"]').val();
        postdata['location']=$('select[name="location"]').val();
        postdata['city']=$('input[name="city"]').val();
        postdata['pincode']=$('input[name="pincode"]').val();
        postdata['address']=$('textarea#address').val();
        postdata['aboutbio']=$('textarea#aboutbio').val()
        postdata['gender']=$('select[name="gender"]').val();
          $.post('/dashboard/register/newtalent',postdata,function(response){
              if(response.success)
                $("#addtalent")[0].reset();
								
			if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
                                                                    $.each( response.errors, function( key, value ) {
                                                                            errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>';
                                                                    });
                                                                    $('[name=addtalent]  .responsereport li').html('' + errorsHtml);
                                                                    $('.responsereport').show();
                                                                     $('.responsereport').html(response.errors);
                                                                }else
                                                                {
                                                                    $('[name=addtalent]  .responsereport li').html('' + response.errors);
                                                                     $('.responsereport').show();
                                                                    $('.responsereport').html(response.errors);
                                                                }				
          });
        
        });
});
    </script>
    @stop