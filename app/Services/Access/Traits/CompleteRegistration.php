<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

use DB;
use Hash;
/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait completeRegistration
{
    use RedirectsUsers;
		public function companyplan(Request $request,Response $response)
            { 
                      
                DB::table('csteps')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->increment('steps');
                return response()->json(array(
                                                    'success' => true,
                                                    'errors' => "Plan selected completed"
                                                    ));

                 
                         

             }
        public function dopayment(Request $request,Response $response)
            { 
             DB::table('csteps')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->increment('steps');
       
                  
                return response()->json(array(
                                                    'success' => true,
                                                    'errors' => "Payment completed"
                                                    ));
                   
                 
                         

             }
    public function CompanyProfileDetails()
     {
          $compdetails = DB::table('comprofile as p')
                                        ->leftjoin('commaster as m', 'm.companyId','=','p.companyId')
                                        ->leftjoin('userlogin as u','u.userId','=','m.userId')
                                         ->leftjoin('_locations as l','l.locationId','=','p.locationId')
                                         ->leftjoin('_industry as i','i.industryId','=','p.industry')
                                        ->select('m.userId','u.emailAddress','p.companyName','p.mobileNumber','p.website','p.aboutbio','p.address','l.locationName','i.industryName')
                                         ->where('u.userId', '=', $_SESSION['WHILLO']['USERID'])
                                        ->first();
          $data['compdetails'] = $compdetails;
 
        return response(view('frontend.myaccount.companydetails', $data),'200')->header('Content-Type', 'text/plain');  
     }
     public function GetCompanyPostedJobs()
     {
         
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          
         $data['jobdetails'] = $jobdetails;
 
        return response(view('frontend.myaccount.companyjoblisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
      public function GetShorlistedCandidates()
     {
         
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          
         $data['jobdetails'] = $jobdetails;
 
        return response(view('frontend.myaccount.candidateshortlisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
           public function SearchedCandidates()
     {
         
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          
         $data['jobdetails'] = $jobdetails;
 
        return response(view('frontend.myaccount.searchedcandidates', $data),'200')->header('Content-Type', 'text/plain');  
     }
      public function AppliedCandidates()
     {
         
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          
         $data['jobdetails'] = $jobdetails;
 
        return response(view('frontend.myaccount.appliedcandidates', $data),'200')->header('Content-Type', 'text/plain');  
     }
     
     

  
}