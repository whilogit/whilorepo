@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Personal details</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                       
                        <li class="active">Personal details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="slice bg-white">
        <div class="wp-section shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Checkout process - Progress bar -->
                        <ol class="progtrckr hidden-xs" data-progtrckr-steps="5">
                           
							<li class="progtrckr-done">Educational Details</li>
                            <li class="progtrckr-done">Personal Details</li>
                            <li class="progtrckr-todo">Proffessional Details</li>
                            <li class="progtrckr-todo">Upload Documents</li>
                            <li class="progtrckr-todo">Post and Share</li>
                        </ol>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="wp-block default user-form">    
                                    <div class="form-header">
                                        <h2>Personal Details</h2>
                                    </div>
                                    <div class="form-body">
                                        <form name="personal" class="sky-form">                                    
                                          <div class="row">
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label class="label">Date Of Birth <span style="color:red">*</span></label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-date"></i>
                                                        <input type="text" name="dob" value="{{ isset($personal->dob) ? date('d-m-Y', $personal->dob) : '' }}" required="required" placeholder="Date Of Birth">
                                                    </label>
                                                </div>               
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Passport number</label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-lock"></i>
                                                        <input type="text" value="{{{ $personal->passport or '' }}}" name="passport" placeholder="Enter your Passport number">
                                                    </label>
                                                </div>               
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Adhar Card number</label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-lock"></i>
                                                        <input type="text" value="{{{ $personal->adharcard or '' }}}" name="adharcard" placeholder="Enter your Adhar Card number">
                                                    </label>
                                                </div>               
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">PAN Card</label>
                                                    <label class="input">
                                                        <i class="icon-append fa fa-lock"></i>
                                                        <input type="text" value="{{{ $personal->pancard or '' }}}"  name="pancard" placeholder="Enter your PAN Card number">
                                                    </label>
                                                </div>               
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Marital Status?? <span style="color:red">*</span></label>
                                                    <label class="select">
                                                        <i class="icon-append fa fa-lock"></i>
                                                       <select name="marital" required="required"><option value="" selected="selected" disabled="disabled">Marital Status</option>
                                                       <option {{ isset($personal->marital) ?  $personal->marital == 1 ? "selected" : '' : '' }} value="1">Single/unmarried</option>
                                                       <option {{ isset($personal->marital) ?  $personal->marital == 0 ? "selected" : '' : '' }} value="0">Married</option>
 <option {{ isset($personal->marital) ?  $personal->marital == 2 ? "selected" : '' : '' }} value="2">Widowed</option>

 <option {{ isset($personal->marital) ?  $personal->marital == 3 ? "selected" : '' : '' }} value="3">Divorced</option>

 <option {{ isset($personal->marital) ?  $personal->marital == 4 ? "selected" : '' : '' }} value="4">Separated</option>

 <option {{ isset($personal->marital) ?  $personal->marital == 5 ? "selected" : '' : '' }} value="5">Other</option>






</select>
                                                    </label>
                                                </div>               
                                            </div>
                                            
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Willing to relocate?? <span style="color:red">*</span></label>
                                                    <label class="select">
                                                        <i class="icon-append fa fa-lock"></i>
                                                       <select name="relocate" required="required"><option value="" selected="selected" disabled="disabled">Willing to relocate</option>
                                                       <option  {{ isset($personal->relocate) ?  $personal->relocate == 1 ? "selected" : '' : '' }} value="1">Yes</option>
                                                       <option {{ isset($personal->relocate) ?  $personal->relocate == 0 ? "selected" : '' : '' }} value="0">No</option>
                                                       </select>
                                                    </label>
                                                </div>               
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Flexible with shifts?? <span style="color:red">*</span></label>
                                                    <label class="select">
                                                        <i class="icon-append fa fa-lock"></i>
                                                       <select name="shifts" required="required"><option value="" selected="selected" disabled="disabled">Flexible with shifts</option>
                                                       <option  {{ isset($personal->shifts) ?  $personal->shifts == 1 ? "selected" : '' : '' }} value="1">Yes</option>
                                                       <option {{ isset($personal->shifts) ?  $personal->shifts == 0 ? "selected" : '' : '' }} value="0">No</option></select>
                                                    </label>
                                                </div>               
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="label">Owning a vehicle?? <span style="color:red">*</span></label>
                                                    <label class="select">
                                                        <i class="icon-append fa fa-lock"></i>
                                                       <select name="vehicle" required="required"><option value="" selected="selected" disabled="disabled">Owning a vehicle</option>
                                                       <option {{ isset($personal->vehicle) ?  $personal->vehicle == 1 ? "selected" : '' : '' }} value="1">Yes</option>
                                                       <option  {{ isset($personal->vehicle) ?  $personal->vehicle == 0 ? "selected" : '' : '' }} value="0">No</option></select>
                                                    </label>
                                                </div>               
                                            </div>
                                            
                                  <div class="row">
                                    <div class="col-md-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-md-4">
                                        <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                            <span>Next</span>
                                        </button>
                                    </div>
                                  </div>
                                                                                    
                                        </div>   
                                         </form>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')

 <script>
 $(function() {
    $("[name=dob]").datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: '1947:2016',
        dateFormat: 'dd-mm-yy',
        maxDate: 0,
        defaultDate: null
    }).on('change', function() {
        $('.datepicker').hide();
    });
});
</script>
    <script src="/assets/app/register.personal.js"></script>
@stop
