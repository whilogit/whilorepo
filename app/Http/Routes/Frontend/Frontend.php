<?php

/**
 * Frontend Controllers
 */
Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('jobs', 'FrontendController@index')->name('frontend.joblist');
Route::get('/feedback/{id}', 'FeedbackController@getfeedback')->name('frontend.submitfeedback');
Route::post('/feedback/submit', 'FeedbackController@submitfeedback');
Route::get('/feedback/status/success', 'FeedbackController@success');
Route::get('/termsandconditions', 'TermsController@index');

Route::get('/payroll', 'FrontendController@payroll')->name('frontend.submitfeedback');
Route::get('/trainhire', 'FrontendController@trainhire')->name('frontend.submitfeedback');
Route::get('/pricing', 'FrontendController@pricing')->name('frontend.pricing');
Route::get('/campus-drives', 'FrontendController@campusdrives')->name('campus-drives');
Route::get('/Employee-Verification', 'FrontendController@employeeverification')->name('frontend.employeeverification');
Route::get('/Database-Management', 'FrontendController@databasemanagement')->name('frontend.databasemanagement');
Route::get('/about-us', 'FrontendController@aboutus')->name('frontend.aboutus');
Route::get('/Language-Training', 'FrontendController@languagetraining')->name('frontend.languagetraining');
Route::get('/Corporate-Leadership-Program', 'FrontendController@corporateleadership')->name('frontend.corporateleadership');




Route::group(['middleware' => 'AuthJoblist'], function () {
	//Route::get('jobs', 'JobController@index')->name('frontend.joblist');
	Route::get('search/joblist/{offset}', 'JobController@joblistpagination')->name('frontend.joblistpagination');
	Route::get('jobdetails/{id}/{title}', 'JobController@jobdetails')->name('frontend.jobdetails');
Route::get('jobs/keyword={keyword}/location={locations}', 'JobController@searchjobjoblist')->name('frontend.jobjoblist');
});


Route::group(['middleware' => 'AuthResumelist'], function () {
	Route::get('talents', 'ResumeController@index')->name('frontend.resumelist');
Route::get('companies', 'CompanyController@index')->name('frontend.company');
	Route::get('consultants', 'ConsultantController@index')->name('frontend.consultant');
	Route::get('talentdetails/{id}/{name}', 'ResumeController@talentdetails')->name('frontend.talentdetails');
	Route::post('resume/permission/{id}', 'ResumeController@permission')->name('frontend.permission');
	Route::post('resume/addfavorite/{id}', 'ResumeController@addfavorite')->name('frontend.addfavorite');
	Route::post('resume/removefavorite/{id}', 'ResumeController@removefavorite')->name('frontend.removefavorite');
	Route::post('resume/downloade/{id}', 'ResumeController@downloade')->name('frontend.downloade');
	
});


Route::get('companylogo.get/{category}/{year}/{month}/{name}/{time}/{size}.{ext}', 'JobController@companylogo')->name('frontend.companylogo');

/**
 * These frontend controllers require the user to be logged in
 */
 Route::group(['namespace' => 'User'], function() {
	 Route::get('company/myjobs/{page}', 'JobController@myjobsbypage')->name('myjobs.pagination');
 });
 
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User'], function() {
        Route::get('dashboard', 'DashboardController@index')->name('frontend.user.dashboard');
        Route::get('profile/edit', 'ProfileController@edit')->name('frontend.user.profile.edit');
        Route::patch('profile/update', 'ProfileController@update')->name('frontend.user.profile.update');
		Route::get('myaccount', 'DashboardController@index')->name('myaccount.index');
		Route::post('job/changestatus/{id}', 'JobController@changestatus');
	});
	
});

