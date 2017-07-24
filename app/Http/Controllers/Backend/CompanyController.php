<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;
use DB;
use App\Repositories\Backend\Company\Approve;


class CompanyController extends Controller
{
   
	
        public function postedJobs()
                {  
                      return view('backend.companyjoblist')->with(array("data"=>Companylist::getjoblist()));
                }
        public function paymentDetails()
                {  
                      return view('backend.companypaymentdetails')->with(array("data"=>Companylist::getpaymentlist()));
                }
        public function addNewCompany()
                { 
                    $industry = DB::table('_industry')->get(); 
		    $location = DB::table('_locations')->get();  
		    return view('backend.addnewcompany')->with(array("locations"=>$location,"industry"=>$industry));
                }
	
}