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
        	<h3 class="panel-title">Registration Form</h3>
	</div>
<div class="panel-body">
        <div class="col-md-6"><br>
                                                    <ul class="list-check responsereport" style="display:none;color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div>
    <form name="company" id="company">

	<div class="form-group col-md-12 col-sm-12">
            <div class = "form-group col-md-6 col-sm-6">
	         <label for="pincode">Choose Plan<span style="color:red">*</span></label>
	     <select name="plan" required="required" class="form-control">
                                                   
                                                          
                                                               <option value="">-Select-</option>
                                                               <option value="1">Plan 1</option>
                                                               <option value="2">Plan 2</option>
                                                                <option value="3">Plan 3</option>
                                                             
                                                      </select>
	</div>
             <div class = "form-group col-md-6 col-sm-6">
            <label for="name">Company/consultancy<span style="color:red">*</span></label>
             <select  required="required" name="registertype" class="form-control">
                                                               <option value="">-Select-</option>
                                                               <option value="1">Company</option>
                                                               <option value="2">Consultancy</option>
                                                               </select>
             </div>
            
            <div class="form-group col-md-6 col-sm-6">
            <label for="email">Company/consultancy Name<span style="color:red">*</span></label>
            <input type="text" class="form-control input-sm"required="required" data-parsley-minlength="2" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 2 characters"  data-parsley-trigger="keyup" name="companyname" placeholder="Company/consultancy Name">
        </div>


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
            <label for="country">Phone</label>
             <input type="text" class="form-control input-sm"data-parsley-minlength="5" data-parsley-maxlength="15" data-parsley-maxlength-message="Max length 15 number" data-parsley-minlength-message="Minlength 5 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" name="phone" placeholder="Phone">
        </div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Mobile<span style="color:red">*</span></label>
           <input type="text" class="form-control input-sm"data-parsley-minlength="10" data-parsley-maxlength="13" data-parsley-maxlength-message="Max length 13 number" data-parsley-minlength-message="Minlength 10 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" required="required" name="mobile" placeholder="Mobile">
        </div>
    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Website<span style="color:red">*</span></label>
              <input type="url" class="form-control input-sm"data-parsley-minlength="5" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 number" data-parsley-minlength-message="Minlength 5 number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" required="required" name="website" placeholder="Website">
        </div>

	<div class = "form-group col-md-6 col-sm-6">
	       <label for="pincode">Industry<span style="color:red">*</span></label>
	      <select name="industry" required="required"  class="form-control"><option value=""  selected="selected" disabled="disabled">-Select Industry-</option>
                                                    @foreach($industry as $list)
                                                    <option value="{{ $list->industryId }}">{{ $list->industryName }}</option>
                                                    @endforeach
                                                    </select>
	</div>

	<div class = "form-group col-md-6 col-sm-6">
	         <label for="pincode">Location<span style="color:red">*</span></label>
	     <select name="location" required="required"  class="form-control">
                                                        <option value="" selected="" disabled="">Location</option>
                                                            @foreach ($locations as $location)
                                                             <option value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                                        @endforeach
                                                      </select>
	</div>

	    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">City</label>
              <input type="text" class="form-control input-sm" data-parsley-minlength="3" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 3 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" name="city" placeholder="City">
        </div>
   
	    <div class="form-group col-md-6 col-sm-6">
            <label for="pincode">Pin code</label>
               <input type="text" class="form-control input-sm" data-parsley-minlength="2" data-parsley-type="digits" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 digits" data-parsley-minlength-message="Min length 2 digits" data-parsley-type-message="Only digits" data-parsley-trigger="keyup" name="pincode" placeholder="Pin code">
        </div>
             
    <div class="col-md-12 col-sm-12" id="deceased">
               <div class="form-group col-md-6 col-sm-6">
            <label for="name">Company Address <span style="color:red">*</span</label>
            <textarea class="form-control input-lg" name="address" id="address" data-parsley-minlength="30" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 30 characters" style="width:400px;"></textarea>
        </div>
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">About Company/Consultancy <span style="color:red">*</span</label>
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
        var proceed = $('form[name=company]').parsley().validate();
        postdata['registertype']=$('select[name="registertype"]').val();
        postdata['companyname']=$('input[name="companyname"]').val();
        postdata['username']=$('input[name="username"]').val();
        postdata['experience']=$('select[name="experience"]').val();
        postdata['email']=$('input[name="email"]').val();
        postdata['password']=$('input[name="password"]').val();
        postdata['repassword']=$('input[name="repassword"]').val();
        postdata['phone']=$('input[name="phone"]').val();
        postdata['mobile']=$('input[name="mobile"]').val();
        postdata['website']=$('input[name="website"]').val();
        postdata['mobile']=$('input[name="mobile"]').val();
        postdata['industry']=$('select[name="industry"]').val();
        postdata['location']=$('select[name="location"]').val();
        postdata['city']=$('input[name="city"]').val();
        postdata['pincode']=$('input[name="pincode"]').val();
        postdata['address']=$('textarea#address').val();
        postdata['aboutbio']=$('textarea#aboutbio').val()
        postdata['plan']=$('select[name="plan"]').val();
          $.post('/dashboard/register/newcompany',postdata,function(response){
              if(response.success)
                $("#company")[0].reset();
								
			if ((typeof  response.errors) == 'object') { 
								var errorsHtml = ""; 
                                                                    $.each( response.errors, function( key, value ) {
                                                                            errorsHtml += '<li><i class="fa fa-times" style="color:#F00;"></i>' + value[0] + '</li>';
                                                                    });
                                                                    $('[name=company]  .responsereport li').html('' + errorsHtml);
                                                                    $('.responsereport').show();
                                                                     $('.responsereport').html(response.errors);
                                                                }else
                                                                {
                                                                    $('[name=company]  .responsereport li').html('' + response.errors);
                                                                     $('.responsereport').show();
                                                                    $('.responsereport').html(response.errors);
                                                                }				
          });
        
        });
});
    </script>
    @stop