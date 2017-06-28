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
                                        ->select('m.userId','u.emailAddress','p.companyName','p.mobileNumber','p.website','p.address','p.locationId')
                                         ->where('u.userId', '=', $_SESSION['WHILLO']['USERID'])
                                        ->first();
          $data= json_encode($compdetails);
        return response()->json(array(
					'success' => true,
                                        'compdetails'=>$data,
					'errors' => "Company details"
					));
     }
     public function GetCompanyPostedJobs()
     {
         
           $jodetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          
          $jobdata= json_encode($compdetails);
        return response()->json(array(
					'success' => true,
                                        'compdetails'=>$jobdata,
					'errors' => "Company job details"
					));
     }

  
}