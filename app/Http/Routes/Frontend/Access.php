<?php
use Illuminate\Support\Facades\Mail;
/**
 * Frontend Access Controllers
 */
Route::group(['namespace' => 'Auth'], function () {

    /**
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'AuthController@logout')->name('auth.logout');

        // Change Password Routes
        Route::get('password/change', 'PasswordController@showChangePasswordForm')->name('auth.password.change');
        Route::post('password/change', 'PasswordController@changePassword')->name('auth.password.update');
    });

    /**
     * These routes require the user NOT be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('auth/signin', 'AuthController@showLoginForm')->name('auth.signin');
        Route::post('auth/signin', 'AuthController@login');
		Route::get('company/signin', 'AuthController@showCompanyLoginForm');
		Route::get('auth/signout', 'AuthController@logout');
		

        // Socialite Routes
        Route::get('login/{provider}', 'AuthController@loginThirdParty')->name('auth.provider');

        // Registration Routes
        Route::get('auth/signup', 'AuthController@showRegistrationForm')->name('auth.signup');
        Route::post('auth/signup', 'AuthController@register');
		Route::post('auth/personal', 'AuthController@personal');
        Route::post('auth/qualification', 'AuthController@qualification');
		Route::post('auth/proffessional', 'AuthController@proffessional');
		Route::post('/documents/educational/upload', 'AuthController@updloadcertificates');
		Route::post('/documents/remove/{id}', 'AuthController@removecertificates');
		Route::post('/jobseeker/complete', 'AuthController@completeuploads');
		Route::post('/jobseeker/removeresume', 'AuthController@removeresume');
		Route::post('/auth/jcomplete', 'AuthController@jcomplete');
		Route::post('/auth/ccomplete', 'AuthController@ccomplete');
		
        // Confirm Account Routes
        Route::get('account/confirm/{token}', 'AuthController@confirmAccount')->name('account.confirm');
        Route::get('account/confirm/resend/{user_id}', 'AuthController@resendConfirmationEmail')->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset/{token?}', 'PasswordController@showResetForm')->name('auth.password.reset');
        Route::post('password/email', 'PasswordController@sendResetLinkEmail');
        Route::post('password/reset', 'PasswordController@reset');
		
		Route::post('auth/profileimage', 'AuthController@profileimage');
		Route::post('auth/userresume', 'AuthController@resumeupdloads');
		
		
		Route::get('company/signup', 'AuthController@showCompanyRegisterForm')->name('company.signup');
		Route::get('company/choose_plans', 'AuthController@showCompanyPlans');
		Route::post('company/signup', 'AuthController@cregister');
		Route::post('company/logo', 'AuthController@logoupload');
		Route::post('company/complete', 'AuthController@compcomplete');
		Route::post('company/companyimages', 'AuthController@imageupload');	  
		Route::post('company/dopayment', 'AuthController@dopayment');
		Route::post('company/planselect', 'AuthController@companyplan');
                Route::get('company/payment', 'AuthController@showPaymentpage');
                Route::get('company/reg_complete', 'AuthController@regCompletepage');
                Route::get('/company/image_upload_page', 'AuthController@CompanyImagesPage');
                Route::post('/company/getdetails', 'AuthController@CompanyProfileDetails');
                Route::post('/company/postedjobs', 'AuthController@GetCompanyPostedJobs');
                Route::post('/company/shortlist', 'AuthController@GetShorlistedCandidates');
                Route::post('/company/searchedcandy', 'AuthController@SearchedCandidates');
                Route::post('/company/appliedcandy', 'AuthController@AppliedCandidates');
                Route::get('/company/editdetails', 'AuthController@EditCompanyDeatils');
              
		
		Route::post('company/removelogo', 'AuthController@removelogo');
		Route::post('company/removeimages', 'AuthController@removeimages');
		
		Route::get('upload/jobs', 'AuthController@showCompanyJobuploadForm');
		Route::post('upload/jobs', 'AuthController@uploadjobs');
		
		
		
			
		Route::get('display/image/{category}/{year}/{month}/{name}/{time}/{size}.{ext}', 'AuthController@displayimage');
		
    });
    Route::get('sendemail', function () {
  $to ='anujavinodvg@gmail.com';
$senderFromMail = 'anujasnair1989@gmail.com';
$senderName ='anuja';
$sub = 'Learning Laravel test email';
$message ='Body of email';
Mail::send(array(), array(), function ($email) use($to,$senderFromMail,$senderName,$sub,$message)
{

$email->to($to)->from($senderFromMail, $senderName)->subject($sub);
$email->setBody($message, 'text/html');
});
    if (Mail::failures()) {
       dd('errorrrrr');
    }
});
});