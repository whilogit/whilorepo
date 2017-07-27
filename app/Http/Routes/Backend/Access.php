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
        
        //Eductional Area
        Route::get('/education', 'BaseTablesController@eductaionindex');
        Route::post('/addeducation', 'BaseTablesController@addEducation');
        Route::post('/editeducation', 'BaseTablesController@editEducation');
        Route::post('/deleteeducation', 'BaseTablesController@deleteEducation');
        
        //Functional Area
        Route::get('/functional', 'BaseTablesController@eductaionindex');
        Route::post('/addfunctional', 'BaseTablesController@addEducation');
        Route::post('/editfunctional', 'BaseTablesController@editEducation');
        Route::post('/deletfunctional', 'BaseTablesController@deleteEducation');
        
        //Industrial Area
        Route::get('/industries', 'BaseTablesController@eductaionindex');
        Route::post('/addindustries', 'BaseTablesController@addEducation');
        Route::post('/editindustries', 'BaseTablesController@editEducation');
        Route::post('/deleteindustries', 'BaseTablesController@deleteEducation');
        
         //Job role
        Route::get('/jobrole', 'BaseTablesController@eductaionindex');
        Route::post('/addjobrole', 'BaseTablesController@addEducation');
        Route::post('/editjobrole', 'BaseTablesController@editEducation');
        Route::post('/deletejobrole', 'BaseTablesController@deleteEducation');
        
         //Job role Category
        Route::get('/jobrolecategory', 'BaseTablesController@eductaionindex');
        Route::post('/addjobrolecategory', 'BaseTablesController@addEducation');
        Route::post('/editjobrolecategory', 'BaseTablesController@editEducation');
        Route::post('/deletejobrolecategory', 'BaseTablesController@deleteEducation');
        
         //Joining time
        Route::get('/joiningtime', 'BaseTablesController@eductaionindex');
        Route::post('/addjoiningtime', 'BaseTablesController@addEducation');
        Route::post('/editjoiningtime', 'BaseTablesController@editEducation');
        Route::post('/deletejoiningtime', 'BaseTablesController@deleteEducation');
        
         //key skills
        Route::get('/keyskills', 'BaseTablesController@eductaionindex');
        Route::post('/addkeyskills', 'BaseTablesController@addEducation');
        Route::post('/editkeyskills', 'BaseTablesController@editEducation');
        Route::post('/deletekeyskills', 'BaseTablesController@deleteEducation');
        
         //Qualification
        Route::get('/qualification', 'BaseTablesController@eductaionindex');
        Route::post('/addqualification', 'BaseTablesController@addEducation');
        Route::post('/editqualification', 'BaseTablesController@editEducation');
        Route::post('/deletequalification', 'BaseTablesController@deleteEducation');
        
          //Salary Range
        Route::get('/salaryrange', 'BaseTablesController@eductaionindex');
        Route::post('/addsalaryrange', 'BaseTablesController@addEducation');
        Route::post('/editsalaryrange', 'BaseTablesController@editEducation');
        Route::post('/deletesalaryrange', 'BaseTablesController@deleteEducation');