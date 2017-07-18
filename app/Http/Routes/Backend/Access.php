<?php
	Route::get('/', 'DashboardController@home')->name('dashboard.home');
        //Talent Module
        Route::get('/talentlist', 'DashboardController@talentlist')->name('dashboard.talentlist');
        
        //Company Modules
        Route::get('/companylist', 'DashboardController@companylist')->name('dashboard.companylist');
        Route::post('company/approve/{id}', 'DashboardController@approve');
        Route::get('/postedjobs', 'CompanyController@postedJobs');
         
       //Basic Features Routes
        Route::get('/workfeatures', 'BaseTablesController@home');
        Route::get('/locations', 'BaseTablesController@locationindex');
