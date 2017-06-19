@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign up</h2>
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
                                <h2>Create Job Seeker Account</h2>
                            </div>
                            <div class="form-body">
                                <form id="frmRegister" data-parsley-validate class="sky-form" name="jobseeker">                                    
                                    <fieldset class="no-padding">           
                                        <section>
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label class="label">Username <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-user"></i>
                                                            <input type="text" name="username"  data-parsley-type="alphanum" data-parsley-minlength="6" data-parsley-maxlength="30" data-parsley-maxlength-message="Max length 30 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" placeholder="Username">
                                                           
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="label">E-mail <span style="color:red">*</span></label>
                                                            <label class="input">
                                                                <i class="icon-append fa fa-envelope-o"></i>
                                                                <input type="email" data-parsley-maxlength="99" data-parsley-minlength="6" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 6 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" name="email" required="required" placeholder="E-mail">
                                                           </label>
                                                        </div>  
                                                    </div>               
                                                </div>
                                            </div>   
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Password <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password"  id="password" data-parsley-maxlength="25" data-parsley-minlength="4" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 4 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" name="password" required="required" placeholder="Password">
                                                        </label>
                                                    </div>               
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="label">Re-Password <span style="color:red">*</span></label>
                                                        <label class="input">
                                                            <i class="icon-append fa fa-lock"></i>
                                                            <input type="password" data-parsley-equalto="#password" name="repassword"  data-parsley-maxlength="25" data-parsley-minlength="4" data-parsley-maxlength-message="Max length 25 characters" data-parsley-minlength-message="Min length 4 characters" data-parsley-trigger="keyup" data-parsley-whitespace="trim" required="required" placeholder="Re-Password">
                                                        </label>
                                                    </div>               
                                                </div>
                                            </div>   
                                       
                                            <div class="row">
                                                <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label class="label">First name <span style="color:red">*</span></label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <input type="text"  name="fname"  data-parsley-type="alphanum" data-parsley-minlength="3" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 3 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup"  required="required" placeholder="First Name">
                                                    </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label class="label">Last name</label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-user"></i>
                                                        <input type="text" name="lname" data-parsley-minlength="1" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 1 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup"  placeholder="Last name">
                                                    </label>
                                                </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-md-6">
                                                 <div class="form-group">
                                                    <label class="label">Mobile <span style="color:red">*</span></label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-building"></i>
                                                        <input type="text" name="mobile" required="required" data-parsley-minlength="10" data-parsley-maxlength="13" data-parsley-maxlength-message="Max length 13 number" data-parsley-minlength-message="Minlength 10 number" data-parsley-type="number" data-parsley-whitespace="trim"  data-parsley-trigger="keyup" data-parsley-type-message="Only numbers" placeholder="Mobile">
                                                    </label>
                                                </div></div>
                                                <div class="col-md-6"> <div class="form-group">
                                                    <label class="label">Gender <span style="color:red">*</span></label>
                                                    <label class="select">
                                                        <i class="icon-append fa fa-phone"></i>
                                                         <select name="gender" required="required">
                                                        <option value="" selected="" disabled="">Gender</option>
                                                        <option value="1">Male</option>
                                                        <option value="0">Female</option>
                                                        </select>
                                                    </label>
                                                </div></div>
                                            </div>
                                        </section>
                                  
                                    
                                    <div class="row">
                                                <div class="col-md-4">
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
                                                </div></div>
                                                <div class="col-md-4"> <div class="form-group">
                                                     <label class="label">City</label>
                                                <label class="input">
                                                    <input type="text" data-parsley-minlength="3" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 3 characters" data-parsley-type-message="Only characters" data-parsley-trigger="keyup"  name="city" placeholder="City">
                                                </label>
                                                </div></div>
                                                
                                                <div class="col-xs-4"> <div class="form-group">
                                                    <label class="label">Pin code</label>
                                                <label class="input">
                                                    <input type="text" data-parsley-minlength="2" data-parsley-type="digits" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 digits" data-parsley-minlength-message="Min length 2 digits" data-parsley-type-message="Only digits" data-parsley-trigger="keyup"  name="pincode" placeholder="Pin code">
                                                </label>
                                                </div></div>
                                           
                                    </div>
                                         <div class="row">
                                        
                                        <div class="col-xs-12"> <div class="form-group">
                                        <label class="label">Address <span style="color:red">*</span></label>
                                            <label for="file" class="input">
                                                <input type="text" data-parsley-minlength="2" data-parsley-maxlength="99" data-parsley-maxlength-message="Max length 99 characters" data-parsley-minlength-message="Min length 2 characters"  data-parsley-trigger="keyup"  required="required" name="address" placeholder="Address">
                                            </label>
                                        </div></div>
                                        
                                        <div class="col-xs-12"> <div class="form-group">
                                        <label class="label">About your self <span style="color:red">*</span></label>
                                            <label class="textarea">
                                                <textarea rows="3" data-parsley-minlength="50" data-parsley-maxlength="200" data-parsley-maxlength-message="Max length 200 characters" data-parsley-minlength-message="Min length 50 characters"  data-parsley-trigger="keyup"  required="required" name="aboutbio" placeholder="About your self"></textarea>
                                            </label>
                                        </div></div>
                                        </div>
                                        
                                        <section>
                                        <br /><div class="row">
                                        <div class="col-md-8">
                                                    <label class="checkbox">
                                                        <input required="required" data-parsley-required-message="Please read and accept the terms and conditions" type="checkbox" name="termsandcondition" id="subscription">
                                                        <i></i> I accept the <a href="#">terms and conditions</a> of this website.
                                                    </label>
                                                </div>
                                                <div class="col-md-4" style="text-align:right">
                                                    <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                                        <span>Register now</span>
                                                    </button>
                                                </div>
                                                
                                                 <div class="col-md-6"><br />
                                                    <ul class="list-check responsereport" style="color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div></div>
                                        </section>
                                       
                                    </fieldset>
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
    <script src="/assets/app/register.jobseekers.js"></script>
@stop
