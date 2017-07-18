@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Company/Consultancy Sign up</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                       
                        <li class="active">Sign up</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
   
    <section class="slice slice-lg bg-image" style="background-image:url(../images/mainbg.png)">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">                   
                        <div class="wp-block default user-form user-form-alpha no-margin">
                            <div class="form-header">
                                <h2>Create your Company/Consultancy account</h2>
                            </div>
                            <div class="form-body">
                                <form name="company" data-parsley-validate class="sky-form">                                    
                                    <fieldset class="no-padding">           
                                        <section class=""> 
                                            <div class="row">
											 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="label">Company/consultancy<span style="color:red">*</span></label>
                                                            <label class="select">
                                                               <select  required="required" name="registertype" class="form-control">
                                                               <option value="">-Select-</option>
                                                               <option value="1">Company</option>
                                                               <option value="2">Consultancy</option>
                                                               </select><i></i>
                                                               
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
												 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Company/consultancy Name<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="text" required="required" data-parsley-minlength="2" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 2 characters"  data-parsley-trigger="keyup" name="companyname" placeholder="Company/consultancy Name">
                                                              
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Username<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="text" required="required" name="username" data-parsley-type="alphanum" data-parsley-minlength="6" data-parsley-maxlength="25" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" placeholder="username">
                                                              
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                        <label class="label">Email Address<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="email" data-parsley-maxlength="99" data-parsley-minlength="5" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" name="email" placeholder="Email Address">
                                                              
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                
												<div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                         <label class="label">Password<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="password" data-parsley-maxlength="25" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" id="password" name="password" placeholder="Password">
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                         <label class="label">Re-Password<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="password" data-parsley-equalto="#password"  data-parsley-maxlength="25" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 5 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" name="repassword" placeholder="Re-Password">
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
												 <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                           <label class="label">Phone</label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" data-parsley-minlength="5" data-parsley-maxlength="15" data-parsley-maxlength-message="Max length 15 number" data-parsley-minlength-message="Minlength 5 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" name="phone" placeholder="Phone">
                                                                
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                           <label class="label">Mobile<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="text" data-parsley-minlength="10" data-parsley-maxlength="13" data-parsley-maxlength-message="Max length 13 number" data-parsley-minlength-message="Minlength 10 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" required="required" name="mobile" placeholder="Mobile">
                                                                
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                           <label class="label">Website<span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-pencil"></i>
                                                                <input type="url" data-parsley-minlength="5" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 number" data-parsley-minlength-message="Minlength 5 number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" required="required" name="website" placeholder="Website">
                                                                
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                
                                                
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="label">Industry<span style="color:red">*</span></label>
                                                            <label class="select">
                                                               <select name="industry" required="required"><option value=""  selected="selected" disabled="disabled">-Select Industry-</option>
                                                    @foreach($industry as $list)
                                                    <option value="{{ $list->industryId }}">{{ $list->industryName }}</option>
                                                    @endforeach
                                                    </select><i></i>
                                                               
                                                            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                                
												
                                                
											 </div>   

                                        </section>
                                        
                                      
                                    </fieldset>  
                                    
                                    <fieldset>
                                        <div class="row">
                                        
                                        <div class="col-xs-4">
                                          <div class="form-group">
                                               <div class="form-group">
                                                  <label class="label">Location <span style="color:red">*</span></label>
                                                <label class="select">
                                                    <select name="location" required="required">
                                                        <option value="" selected="" disabled="">Location</option>
                                                            @foreach ($locations as $location)
                                                             <option value="{{ $location->locationId }}">{{ $location->locationName }}</option>
                                                        @endforeach
                                                      </select>
                                                    <i></i>
                                                </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                        <div class="col-xs-4">
                                          <div class="form-group">
                                               <div class="form-group">
                                                  <label class="label">City</label>
                                                <label class="input">
                                                    <input type="text" data-parsley-minlength="3" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 3 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" name="city" placeholder="City">
                                                </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                        <div class="col-xs-4">
                                          <div class="form-group">
                                               <div class="form-group">
                                                  <label class="label">Pin code</label>
                                                <label class="input">
                                                    <input type="text" data-parsley-minlength="2" data-parsley-type="digits" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 digits" data-parsley-minlength-message="Min length 2 digits" data-parsley-type-message="Only digits" data-parsley-trigger="keyup" name="pincode" placeholder="Pin code">
                                                </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                        
                                        
                                        <div class="col-xs-12">
                                          <div class="form-group">
                                               <div class="form-group">
                                                  <label class="label">Address <span style="color:red">*</span></label>
                                            <label for="file" class="input">
                                                <input type="text" data-parsley-minlength="2" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 2 characters"  data-parsley-trigger="keyup"  required="required" name="address" placeholder="Address">
                                            </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                           
                                            
                                        <div class="col-xs-12">
                                          <div class="form-group">
                                               <div class="form-group">
                                                 <label class="label">About Company/Consultancy <span style="color:red">*</span></label>
                                            <label class="textarea">
                                                <textarea rows="3" required="required" ata-parsley-minlength="30" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 30 characters"  data-parsley-trigger="keyup" name="aboutbio" placeholder="About Company/Consultancy"></textarea>
                                            </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                        
                                        <div class="col-xs-8">
                                          <div class="form-group">
                                               <div class="form-group">
                                                   <label class="checkbox">
                                                        <input type="checkbox" required="required" data-parsley-required-message="Please read and accept the terms and conditions" name="termsandcondition" id="subscription">
                                                        <i></i> I accept the <a href="#openModal">terms and conditions</a> of this website.
                                                    </label>
                                                </div>  
                                            </div>               
                                        </div>
                                        
                                               <div id="openModal" class="modalDialog">
    <div>	<a href="#close" title="Close" class="close">X</a>

        	<h2>Terms & Conditions</h2>

        <p>YOUR MEMBERSHIP ACCOUNT</p>
        <p>If you use this site, you are responsible for maintaining the confidentiality of your account and password and for restricting access to your computer, and you agree to accept responsibility for all activities that occur under your account or password. MYCOMPANY and its associates reserve the right to refuse service, terminate accounts, remove or edit content, or cancel orders in their sole discretion.</p>
    </div>
                                           </div>
                                             
                                            
                                        <div class="col-xs-4">
                                          <div class="form-group">
                                               <div class="form-group">
                                                 <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                                        <span>Register now</span>
                                                    </button>
                                                </div>  
                                            </div>               
                                        </div>
                                        <div class="col-md-6"><br>
                                                    <ul class="list-check responsereport" style="color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div>
                                        
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                    </fieldset>
                                    
                                    
<div class="row">
                                                
                                                
                                        </div>
                                   
                                </form>  
                            </div>
                            <div class="form-footer">
                                <p>Already have an account? <a href="sign-in-1.html">Click here to sign in.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.company.js"></script>
@stop
<style>
    .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}
    </style>

