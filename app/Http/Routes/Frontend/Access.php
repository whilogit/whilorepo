<?php

/**
 * Frontend Access Controllers
 */
Route::group(['namespace' => 'Auth'], function () {
    
        Route::group(['middleware' => ['web','auth']] , function () {
		        Route::get('company/choose_plans', 'AuthController@showCompanyPlans');
		        Route::get('company/plan_expiry', 'AuthController@showEpiryPage');		    
			Route::post('/company/payment', 'AuthController@PaymentPlanDetails');
			Route::post('/ccavenue/responseurl', 'AuthController@CcavenuResponse');
			Route::post('/ccavenue/cancelurl', 'AuthController@CcavenuCancel');
			Route::post('company/planselect', 'AuthController@companyplan');
            
        });

    /**
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => ['web','auth', 'planexpiry']] , function () {
      

        // Change Password Routes
        Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');
        Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.update');
        
        //Company Routes
        
    
       
        Route::post('company/logo', 'AuthController@logoupload');
        Route::post('company/complete', 'AuthController@compcomplete');
        Route::post('company/companyimages', 'AuthController@imageupload');
        Route::post('company/dopayment', 'AuthController@dopayment');
        
        Route::get('company/reg_complete', 'AuthController@regCompletepage');
        Route::get('/company/image_upload_page', 'AuthController@CompanyImagesPage');
        Route::post('/company/getdetails', 'AuthController@CompanyProfileDetails');
        Route::post('/company/postedjobs', 'AuthController@GetCompanyPostedJobs');
        Route::post('/company/shortlist', 'AuthController@GetShorlistedCandidates');
        Route::post('/company/searchedcandy', 'AuthController@SearchedCandidates');
        Route::post('/company/appliedcandy', 'AuthController@AppliedCandidates');
        Route::post('/company/editdetails', 'AuthController@EditCompanyDeatils');
        Route::post('/company/accesscandidate', 'AuthController@AccessCandidates');
        Route::post('/company/editjobs', 'AuthController@GetJobDetails');
        Route::post('/company/updatejob', 'AuthController@UpdateJobDetails');
        Route::get('/company/passwordform', 'AuthController@compPasswordChangeForm');
        Route::post('/company/changePassword', 'AuthController@changeCompanyPassword');

        Route::post('company/removelogo', 'AuthController@removelogo');
        Route::post('company/removeimages', 'AuthController@removeimages');

        Route::get('upload/jobs', 'AuthController@showCompanyJobuploadForm');
        Route::post('upload/jobs', 'AuthController@uploadjobs');

        Route::post('/company/basicdetails', 'AuthController@CompanyBasicDetails');
         Route::post('/company/getcompanyImages', 'AuthController@CompanyGetImages');


        Route::post('send/email', 'AuthController@sendmail');
        Route::post('send/registrationmail', 'AuthController@sendRegistarionMail');
        Route::post('send/interviewemail', 'AuthController@CallForInterview');
        Route::post('send/appliedemail', 'AuthController@CallforApplied');
        Route::post('send/shortliststatus', 'AuthController@ShortListStatus');
        

    });
    Route::post('auth/signin', 'AuthController@login');
     Route::get('auth/signin', 'AuthController@showLoginForm')->name('auth.signin');
     Route::get('company/signin', 'AuthController@showCompanyLoginForm');
     Route::post('auth/signin', 'AuthController@login');
     Route::get('auth/signout', 'AuthController@logout');
     Route::get('logout', 'AuthController@logout')->name('auth.logout');
     Route::get('company/signup', 'AuthController@showCompanyRegisterForm')->name('company.signup');
     Route::post('company/signup', 'AuthController@cregister');
        // Socialite Routes
     Route::get('login/{provider}', 'AuthController@loginThirdParty')->name('auth.provider');
       
     // Registration Routes
     Route::get('auth/signup', 'AuthController@showRegistrationForm')->name('auth.signup');
     Route::post('auth/signup', 'AuthController@register');
     Route::post('auth/personal', 'AuthController@personal');

    /**
     * These routes require the user NOT be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
       

        Route::post('auth/qualification', 'AuthController@qualification');
        Route::post('auth/proffessional', 'AuthController@proffessional');
        Route::post('/documents/educational/upload', 'AuthController@updloadcertificates');
        Route::post('/documents/remove/{id}', 'AuthController@removecertificates');
        Route::post('/jobseeker/complete', 'AuthController@completeuploads');
        Route::post('/jobseeker/removeresume', 'AuthController@removeresume');
        Route::post('/auth/jcomplete', 'AuthController@jcomplete');
        Route::post('/auth/ccomplete', 'AuthController@ccomplete');

//jobseeker education update
        Route::post('/auth/updateEducation', 'AuthController@updateEducation');
        Route::get('/auth/getAllEducationDetails', 'AuthController@getAllEducationDetails');
        Route::get('/auth/getAllqualificationList', 'AuthController@getAllqualificationList');
        Route::get('/auth/getcourseTypes', 'AuthController@getcourseTypes');
        Route::get('/auth/getallProfileDetails', 'AuthController@getallProfileDetails');
        Route::post('/auth/updateProfileDetails', 'AuthController@updateProfileDetails');
        //applied jobs
        Route::get('/auth/getallAppliedJobs', 'AuthController@getallAppliedJobs');
        Route::get('/auth/getallShortListedJobs', 'AuthController@getallShortListedJobs');
        Route::get('/auth/getAllProfessionalDetails', 'AuthController@getAllProfessionalDetails');
        //professional
       // Route::get('/auth/getAllProfessionalList', 'AuthController@getAllProfessionalList');
       // Route::get('/auth/getAllFuncationalArea', 'AuthController@getAllFuncationalArea');
       // Route::post('/auth/updateProfessionalDetails', 'AuthController@updateProfessionalDetails);
        Route::get('/auth/comonylist', 'AuthController@comonylist');
        Route::post('/auth/companyUpdate', 'AuthController@companyUpdate');
       

        // Confirm Account Routes
        Route::get('account/confirm/{token}', 'AuthController@confirmAccount')->name('account.confirm');
        Route::get('account/confirm/resend/{user_id}', 'AuthController@resendConfirmationEmail')->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('auth.password.reset');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');


        Route::post('auth/profileimage', 'AuthController@profileimage');
        Route::post('auth/userresume', 'AuthController@resumeupdloads');





        Route::get('display/image/{category}/{year}/{month}/{name}/{time}/{size}.{ext}', 'AuthController@displayimage');
    });
});



