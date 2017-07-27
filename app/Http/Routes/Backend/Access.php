<?php
	Route::get('/', 'DashboardController@home')->name('dashboard.home');
        //Talent Module
        Route::get('/talentlist', 'DashboardController@talentlist')->name('dashboard.talentlist');
        Route::get('/shortlistcandidate', 'DashboardController@shortlistcandidate')->name('dashboard.talentlist');
         Route::get('/hiredcandidate', 'DashboardController@hiredcandidate')->name('dashboard.talentlist');
        //Company Modules
        Route::get('/companylist', 'DashboardController@companylist')->name('dashboard.companylist');
        Route::post('company/approve/{id}', 'DashboardController@approve');
        Route::get('/postedjobs', 'CompanyController@postedJobs');
        Route::get('/paymentdetails', 'CompanyController@paymentDetails');
        Route::get('/addnewcompany', 'CompanyController@addNewCompany');
        Route::post('/register/newcompany','CompanyController@insertNewCompany');
        Route::get('/approvevideolist','CompanyController@youtubeVideoList');
        Route::post('/approvevideo','CompanyController@approveYoutubeVideo');
        Route::get('/adminaddedcompanies', 'CompanyController@adminAddedCompany');
        
        
        
         
       //Basic Features Routes
        Route::get('/workfeatures', 'BaseTablesController@home');
        
        //Location
        Route::get('/locations', 'BaseTablesController@locationindex');
        Route::post('/addlocation', 'BaseTablesController@addLocation');
        Route::post('/editlocation', 'BaseTablesController@editLocation');
        Route::post('/deletelocation', 'BaseTablesController@deleteLocation');
        
        //Eductaional Area
        Route::get('/education', 'BaseTablesController@eductaionindex');
        Route::post('/addeducation', 'BaseTablesController@addEducation');
        Route::post('/editeducation', 'BaseTablesController@editEducation');
        Route::post('/deleteeducation', 'BaseTablesController@deleteEducation');