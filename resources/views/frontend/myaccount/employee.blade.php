@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>My Account</h2>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Myaccount</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

 <section class="slice bg-white" style="margin-top:5%">
        <div class="wp-section user-account">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12"> 
					
            
                      @include('frontend.myaccount.jobseekrs.profile')
					</div>
            
        </div>
    </div></div></section>
    
       
@endsection

@section('after-scripts-end')
    <script>
       
    </script>
@stop