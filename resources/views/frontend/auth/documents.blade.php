@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Uploade your documents</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Uploade your documents</li>
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
                    <li class="progtrckr-done">Proffessional Details</li>
                    <li class="progtrckr-done">Upload Documents</li>
                    <li class="progtrckr-todo">Completed</li>
                        </ol>

                        <div class="row" name="documents">
                            <div class="col-md-12">
                                <div class="wp-block default user-form">    
                                    <div class="form-header">
                                        <h2>Documents details</h2>
                                    </div>
                                    <div class="form-body"> <form name="seekerdocuemnts" class="sky-form">
                                           <fieldset class="no-padding">    
                                                <section>
                                                
                                                <section> 
												
                                              <div class="row">
											   <div class="col-md-6">
											   <div class="panel panel-default">
  <div class="panel-heading">Upload Profile Photo</div>
  <div class="panel-body">
    <div class="form-group">
                                                      <div class="col-md-12 custom_input_file">
                            <i class="fa fa-smile-o col-md-2 left"></i>
                            <div class="custom-input_file col-md-9 right">
                                <input type="file" class="input_file" name="profileimage">
                             </div>
                             <div class="row"><div class="col-md-4 profileimage">
                              @foreach ($jprofileimage as $image)
                              	<img src="/display/image/{{ $image->imageCategory }}/{{ $image->dirYear }}/{{ $image->dirMonth }}/{{ $image->imageName }}/{{ $image->crTime }}/s.{{ $image->imgExt }}" style="border:1px solid #ccc"><span id="close" class="close">x</span>
                              @endforeach
                             </div></div>
							
                        </div></div>
  </div>
</div>
                                                             </div>
						<div class="col-md-6">
						<div class="panel panel-default">
  <div class="panel-heading">Upload Your Resume</div>
  <div class="panel-body">
               <div class="form-group">
                             <div class="col-md-12 custom_input_file">
                            <i class="fa fa-file-word-o col-md-2 left"></i>
                            <div class="custom-input_file col-md-9 right">
                                <input type="file" class="input_file" name="userresume">
                            </div>
							<div class="col-md-1" name="userresume">
                            @foreach ($resumes as $resume)
                            <span id="close" class="close">x</span><a><i class="fa fa-file-word-o" style="font-size: 4em;"></i></a>
                            @endforeach
                            </div>
                        </div></div>
  </div>
</div>
                                                  </div>
						</div><hr>
						
						  <div class="row">
											   <div class="col-md-6">
											   <div class="panel panel-default">
  <div class="panel-heading">Upload your Educational Certificates</div>
  <div class="panel-body">
    <div class="form-group">
                                                      
                           <table class="table table-cart table-responsive" name="educationalcertificates">
                            <tbody>
                            @foreach ($edudocument as $edudoc)
                            	<tr id="{{ $edudoc->doctitleId }}">
                                    <td><input type="file" style="display:none" name="file" /><input value="{{ $edudoc->docTitle }}" placeholder="Document title" type="text" name="educationaldocuments" class="form-control" /></td>
                                    <td><a id="choosefile" name="choosefile">Choose your document (<span>{{ $edudoc->actualName }}</span>)</a></td>
                                    <td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>
                            @endforeach
                            
                                <tr id="new">
                                    <td><input type="file" style="display:none" name="file" /><input placeholder="Document title" type="text" name="educationaldocuments" class="form-control" /></td>
                                    <td><a id="choosefile" name="choosefile">Choose your document (<span>Choose</span>)</a></td>
                                    <td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>
                                
                            </tbody>
                            <tfoot><tr><td  style="text-align:right" colspan="3">
                                <input type="button" name="addmore" value="Add more" /></td></tr></tfoot>
                        </table>
                        <script>var neweducert = '<tr id="new"><td><input type="file" style="display:none" name="file" /><input placeholder="Document title" type="text" name="educationaldocuments" class="form-control" /></td><td><a id="choosefile" name="choosefile">Choose your document (<span>Choose</span>)</a></td><td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>';</script>
                        
                        </div>
  </div>
</div>
                                                             </div>
						<div class="col-md-6">
						<div class="panel panel-default">
  <div class="panel-heading">Upload your Proffessional Certificates</div>
  <div class="panel-body">
               <div class="form-group">
                                                      <table class="table table-cart table-responsive" name="proffessionalcertificates">
                            <tbody>
                                
                                @foreach ($profdocument as $profdoc)
                                	<tr id="{{ $profdoc->doctitleId }}">
                                    <td><input type="file" style="display:none" name="file" /><input value="{{ $profdoc->docTitle }}" placeholder="Document title" type="text" name="proffessionaldocuments" class="form-control" /></td>
                                    <td><a name="choosefile">Choose your document (<span>{{ $profdoc->actualName }}</span>)</a></td>
                                    <td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>
                                @endforeach
                                
                                <tr id="new">
                                    <td><input type="file" style="display:none" name="file" /><input placeholder="Document title" type="text" name="proffessionaldocuments" class="form-control" /></td>
                                    <td><a name="choosefile">Choose your document (<span>Choose</span>)</a></td>
                                    <td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>
                                
                            </tbody>
                             <script>var newprofcert = '<tr id="new"><td><input type="file" style="display:none" name="file" /><input placeholder="Document title" type="text" name="proffessionaldocuments"  class="form-control" /></td><td><a name="choosefile">Choose your document (<span>Choose</span>)</a></td><td class="remove-cell"><a class="cart-remove" title="Remove item"><i class="fa fa-times-circle fa-2x" style="font-size: 2em;"></i></a></td> </tr>';</script>
                            <tfoot><tr><td  style="text-align:right" colspan="3">
                                <input type="button" name="addmore" value="Add more" /></td></tr></tfoot>
                        </table></div>
  </div>
</div>
                                                  </div>
						</div>
						
													
						<div class="row">
                                                           
<div class="col-md-12">
<div class="col-md-6">
                <div class="form-group">
                            <label class="label">Link your facebook profile</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock"></i>
                                <input type="text" name="facebook" value="{{ isset($jsocialmedia->facebookLink) ? $jsocialmedia->facebookLink : "" }}" placeholder="Enter url of your facebook profile">
                                
                            </label>
                        </div>               
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label">Link your twitter profile</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock"></i>
                                <input type="text" name="twitter" value="{{ isset($jsocialmedia->twitterLink) ? $jsocialmedia->twitterLink : "" }}" placeholder="Enter url of your twitter profile">
                                
                            </label>
                        </div>               
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="label">Link your LinkedIn profile</label>
                            <label class="input">
                                <i class="icon-append fa fa-lock"></i>
                                <input type="text" name="linkedin" value="{{ isset($jsocialmedia->linkedInLink) ? $jsocialmedia->linkedInLink : "" }}" placeholder="Enter url of your LinkedIn profile">
                                <b class="tooltip tooltip-bottom-right">Needed to enter the website</b>
                            </label>
                        </div>               
                    </div>
                     
</div>													
                    </div>
                    <div class="row">
                    <br /><div class="col-md-12">
                    <div class="col-md-8">
                        <div class="form-group">
                           &nbsp;
                        </div> </div>
                    <div class="col-md-4">
                        <div class="form-group">
                           <a name="btnsubmit" class="btn btn-lg btn-block btn-alt btn-icon btn-icon-right btn-icon-go pull-right">
        <span>Go to next step</span>
    </a>
                        </div> </div>              
                    </div>
                    </div>
             
        </section></section></fieldset>  </form>

                                           
                                       
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
.custom_input_file {
    overflow: hidden;
    position: relative;
    cursor: pointer;
 /*   text-align: center; */
}
.custom_input_file i{
	font-size: 8em;
}
.custom_input_file .input_file {
    margin: 0;
    padding: 0;
    outline: 0;
    font-size: 10000px;
    border: 10000px solid transparent;
    opacity: 0;
    filter: alpha(opacity=0);
    position: absolute;
    right: -1000px;
    top: -1000px;
    cursor: pointer;
}

</style>

@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.documents.js"></script>
@stop
