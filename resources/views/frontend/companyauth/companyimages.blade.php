@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Company/Consultancy logo and images</h2>
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
                        <div class="wp-block default user-form no-margin">
                            <div class="form-header">
                                <h2>Upload your company photos</h2>
                            </div>
                            <div class="form-body">
                                <form name="companyimages" id="frmRegister" class="sky-form">                                    
                                    <fieldset class="no-padding">           
                                        <section class=""> 
                                           
										 <div class="row" style="border:1px solid #ccc;background:#eee;padding-bottom:2%;">
											 <div class="col-md-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="input">Upload your logo here   </label>
															 <label class="btn btn-block btn-primary">
                Browse… <input name="logo" type="file" style="display: none;">
            </label>
                                                        </div>  
                                                    </div>               
                                                </div>
												 <div class="col-md-2" name="logoimage">
                                                 @foreach ($companylogo as $logo) <img src="/display/image/{{ $logo->logoCategory }}/{{ $logo->dirYear }}/{{ $logo->dirMonth }}/{{ $logo->logoName }}/{{ $logo->crTime }}/s.{{ $logo->logExt }}" style="border:1px solid #ccc"> @endforeach             
                                                  <span id="close" class="close">x</span>       
                                                </div>
										<br></div>
										<div class="row">
											 <div class="col-md-12" style="border:1px solid #ccc">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="input">Upload your photos here   </label>
															 <label class="btn btn-block btn-primary">
                Browse… <input name="companyimage" type="file" multiple="multiple" style="display: none;">
            </label>
                                                        </div>  
                                                    </div>               
                                                </div><div name="companyimages">
																	 @foreach ($companyimages as $images)
                                                                                 <div class="col-md-2"><img  src="/display/image/{{ $images->imageCategory }}/{{ $images->dirYear }}/{{ $images->dirMonth }}/{{ $images->logoName }}/{{ $images->crTime }}/s.{{ $images->logExt }}" style="border:1px solid #ccc;width:100%">  
<span id="close" class="close">x</span></div> @endforeach  
</div>
												 
                                                
                                            </div>   

                                        </section>
                                        
                                      
                                    </fieldset>  
									<div class="row">
                                                <div class="col-md-8">
                                                   &nbsp;
                                                </div>
                                                <div class="col-md-4">
                                                    <button class="btn btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit" type="button">
                                                        <span>Complete Registration</span>
                                                    </button>
                                                </div>
                                                
                                                 <div class="col-md-6"><br>
                                                    <ul class="list-check responsereport" style="color:#F00;">
                                                        <li> </li>
                                                    </ul>
                                                 </div>
                                        </div>
                                   
                                </form>  
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.companyimages.js"></script>
@stop
