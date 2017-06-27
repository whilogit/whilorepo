<?php

Route::group(['middleware' => 'web'], function() {
   
    Route::group(['namespace' => 'Language'], function () {
        require (__DIR__ . '/Routes/Language/Language.php');
    });
	Route::group(['namespace' => 'Frontend'], function () {
        require (__DIR__ . '/Routes/Frontend/Frontend.php');
        require (__DIR__ . '/Routes/Frontend/Access.php');
    });
});

Route::group(['namespace' => 'Backend', 'middleware' => 'authadmin'], function () {  
    Route::get('admin1234', 'DashboardController@index')->name('admin.dashboard');
	Route::get('admin/auth/signin', 'DashboardController@index')->name('admin.dashboard');
	Route::post('admin/auth/signin', 'DashboardLoginController@dashboardsignin');
});

Route::group(['namespace' => 'Backend', 'prefix' => 'dashboard', 'middleware' => 'superadmin'], function () {   
    require (__DIR__ . '/Routes/Backend/Dashboard.php');
    require (__DIR__ . '/Routes/Backend/Access.php');
    require (__DIR__ . '/Routes/Backend/LogViewer.php');
});
