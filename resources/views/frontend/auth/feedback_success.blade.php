@extends('frontend.layouts.master')

@section('content')

        <div class="pg-opt" style="margin-top:5%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Thank for your feedback</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>                       
                        <li class="active">Feedback successfully submited</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>



   <section class="slice bg-base" style="background: #242738;">
           <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="col-md-12">Feedback successfully submited</h2>


                    </div>
                  

                </div>
            </div>
        </div>
    </section>
</div>

<style>
body{font-family:Tw Cen MT !important;}
ul li,p{    font-size: 16px;
    line-height: 21px;}
</style>
@endsection

@section('after-scripts-end')
@endsection
