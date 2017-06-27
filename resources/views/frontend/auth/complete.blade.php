@extends('frontend.layouts.master')

@section('content')
   <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Proffessional Details</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Completed</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    
    <section class="slice bg-white" name="jcomplete">
        <div class="wp-section shop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="product-gallery">
                                    <div class="primary-image">
                                     @foreach ($jprofile as $image)
                              	<img src="/display/image/{{ $image->imageCategory }}/{{ $image->dirYear }}/{{ $image->dirMonth }}/{{ $image->imageName }}/{{ $image->crTime }}/s.{{ $image->imgExt }}" style="border:1px solid #ccc;width:100%">
                              @endforeach
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            @foreach ($jprofile as $details)
                            <div class="col-md-10">
                                <div class="product-info">
                                    <h3 class="product-title">{{ $details->firstName }} {{ $details->lastName }}</h3>
                                   <p>
                                    {{ $details->shortBio }}
                                    </p>
                                    <hr>
                                    <div class="product-short-info">
                                        <p><strong>Mobile</strong>: {{ $details->mobileNumber }}</p>
                                        <p><strong>Email</strong>: {{ $details->emailAddress }}</p>
                                        <p><strong>User Name</strong>: {{ $details->userName }}</p>
                                   </div>
                                </div>
                            </div>
                             @endforeach
                             
                             <div class="col-md-12">
                    <div class="col-md-10">
                        <div class="form-group">
                           &nbsp;
                        </div> </div>
                    <div class="col-md-2">
                        <div class="form-group">
                           <a class="btn btn-lg btn-block btn-alt btn-icon btn-icon-right btn-icon-go pull-right btnsubmit">
        <span>Complete</span>
    </a>
    
     
    
                        </div> </div>              
                    </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts-end')
    <script src="/assets/app/register.jcomplete.js"></script>
@stop
