<?php
	Route::get('/', 'DashboardController@home')->name('dashboard.home');
	Route::get('/companylist', 'DashboardController@companylist')->name('dashboard.companylist');
	Route::get('/talentlist', 'DashboardController@talentlist')->name('dashboard.talentlist');
        Route::post('company/approve/{id}', 'DashboardController@approve');
        
        //Basic Features Routes
        Route::get('/workfeatures', 'BaseTablesController@home');
        Route::get('/locations', 'BaseTablesController@locationindex');
        
        
 