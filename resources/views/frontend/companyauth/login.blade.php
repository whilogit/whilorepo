@extends('frontend.layouts.master')

@section('content')
<div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sign in</h2>
                </div>
                <div class="col-md-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Sign in</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
    <section class="slice slice-lg bg-image" style="background-image:url(../images/mainbg.png);">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="wp-block default user-form no-margin"> 
                            <div class="form-header">
                                <h2>Sign in to your account</h2>
                            </div>
                            <div class="form-body">
                                <form action="" id="frmLogin" class="sky-form">                                    
                                    <fieldset>                  
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Email</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-user"></i>
                                                    <input type="email" name="email">
                                                </label>
                                            </div>     
                                        </section>
                                        <section>
                                            <div class="form-group">
                                                <label class="label">Password</label>
                                                <label class="input">
                                                    <i class="icon-append fa fa-lock"></i>
                                                    <input type="email" name="email">
                                                </label>
                                            </div>     
                                        </section> 
                                        <section>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="checkbox"><input type="checkbox" name="remember" checked=""><i></i>Keep me logged in</label>
                                                </div>
                                            </div>
                                        </section>

                                        <section>
                                            <button class="btn btn-base btn-icon btn-icon-right btn-sign-in pull-right" type="submit">
                                                <span>Next Step</span>
                                            </button>
                                        </section>
                                    </fieldset>  
                                </form>  
                            </div>
                            <div class="form-footer">
                                <p>Lost your password? <a href="#">Click here to recover.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection