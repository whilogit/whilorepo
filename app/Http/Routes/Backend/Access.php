<?php
	Route::get('/adminhome', 'DashboardController@home')->name('dashboard.home');
        //Talent Module
        Route::get('/talentlist', 'DashboardController@talentlist')->name('dashboard.talentlist');
        Route::get('/shortlistcandidate', 'DashboardController@shortlistcandidate')->name('dashboard.talentlist');
        Route::get('/hiredcandidate', 'DashboardController@hiredcandidate')->name('dashboard.talentlist');
        Route::get('/addtalent', 'DashboardController@talentAddView');
        Route::post('/register/newtalent','DashboardController@insertNewTalent');
       
        //Company Modules
        Route::get('/companylist', 'DashboardController@companylist')->name('dashboard.companylist');
        Route::post('company/approve', 'CompanyController@companyapprove');
        Route::get('/postedjobs', 'CompanyController@postedJobs');
        Route::get('/paymentdetails', 'CompanyController@paymentDetails');
        Route::get('/addnewcompany', 'CompanyController@addNewCompany');
        Route::post('/register/newcompany','CompanyController@insertNewCompany');
        Route::get('/approvevideolist','CompanyController@youtubeVideoList');
        Route::post('/approvevideo','CompanyController@approveYoutubeVideo');
        Route::get('/adminaddedcompanies', 'CompanyController@adminAddedCompany');
        Route::get('/planexpiry', 'CompanyController@CompanyPlanExpiry');
       
        
        
        
         
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
        Route::get('/functional', 'BaseTablesController@functionalindex');
        Route::post('/addfunctional', 'BaseTablesController@addFunctional');
        Route::post('/editfunctional', 'BaseTablesController@editFunctional');
        Route::post('/deletfunctional', 'BaseTablesController@deleteFunctional');
        
        //Industrial Area
        Route::get('/industries', 'BaseTablesController@industriesindex');
        Route::post('/addindustries', 'BaseTablesController@addIndustries');
        Route::post('/editindustries', 'BaseTablesController@editIndustries');
        Route::post('/deleteindustries', 'BaseTablesController@deleteIndustries');
        
         //Job role
        Route::get('/jobrole', 'BaseTablesController@jobroleindex');
        Route::post('/addjobrole', 'BaseTablesController@addJobrole');
        Route::post('/editjobrole', 'BaseTablesController@editJobrole');
        Route::post('/deletejobrole', 'BaseTablesController@deleteJobrole');
        
         //Job role Category
        Route::get('/jobrolecategory', 'BaseTablesController@jobrolecategoryindex');
        Route::post('/addjobrolecategory', 'BaseTablesController@addJobrolecategory');
        Route::post('/editjobrolecategory', 'BaseTablesController@editJobrolecategory');
        Route::post('/deletejobrolecategory', 'BaseTablesController@deleteJobrolecategory');
        
         //Joining time
        Route::get('/joiningtime', 'BaseTablesController@joiningtimeindex');
        Route::post('/addjoiningtime', 'BaseTablesController@addJoiningtime');
        Route::post('/editjoiningtime', 'BaseTablesController@editJoiningtime');
        Route::post('/deletejoiningtime', 'BaseTablesController@deleteJoiningtime');
        
         //key skills
        Route::get('/keyskills', 'BaseTablesController@keyskills');
        Route::post('/addkeyskills', 'BaseTablesController@addKeyskills');
        Route::post('/editkeyskills', 'BaseTablesController@editKeyskills');
        Route::post('/deletekeyskills', 'BaseTablesController@deleteKeyskills');
        
         //Qualification
        Route::get('/qualification', 'BaseTablesController@qualificationindex');
        Route::post('/addqualification', 'BaseTablesController@addQualification');
        Route::post('/editqualification', 'BaseTablesController@editQualification');
        Route::post('/deletequalification', 'BaseTablesController@deleteQualification');
        
          //Salary Range
        Route::get('/salaryrange', 'BaseTablesController@salaryrangeindex');
        Route::post('/addsalaryrange', 'BaseTablesController@addSalaryrange');
        Route::post('/editsalaryrange', 'BaseTablesController@editSalaryrange');
        Route::post('/deletesalaryrange', 'BaseTablesController@deleteSalaryrange');