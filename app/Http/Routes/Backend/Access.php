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
         
       //Basic Features Routes
        Route::get('/workfeatures', 'BaseTablesController@home');
        Route::get('/locations', 'BaseTablesController@locationindex');
        Route::post('/addlocation', 'BaseTablesController@addLocation');
        Route::post('/editlocation', 'BaseTablesController@editLocation');
        Route::post('/deletelocation', 'BaseTablesController@deleteLocation');
        
        
