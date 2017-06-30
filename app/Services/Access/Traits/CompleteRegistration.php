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
                                        ->select('m.userId','u.emailAddress','p.companyName','p.mobileNumber','p.website','p.aboutbio','p.address','l.locationName','i.industryName','p.locationId','p.industry')
                                         ->where('u.userId', '=', $_SESSION['WHILLO']['USERID'])
                                        ->first();
         $defaults['locations'] = DB::table('_locations')->get();
        $defaults['industry'] = DB::table('_industry')->get();	
          //$data['compdetails'] = $compdetails;
      $data=array('compdetails'=>$compdetails, 'response'=>$defaults);

        return response(view('frontend.myaccount.companydetails', $data),'200')->header('Content-Type', 'text/plain');  
     }
     public function GetCompanyPostedJobs()
     {
         
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate','j.locationId')
                                        ->leftjoin('_locations as l','l.locationId','=','j.locationId')
                                         ->where('j.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();
           
          $defaults['locations'] = DB::table('_locations')->get();
            $data=array('jobdetails'=>$jobdetails, 'response'=>$defaults);
        
 
        return response(view('frontend.myaccount.companyjoblisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
      public function GetShorlistedCandidates()
     {
         
          $shortlist = DB::table('shortlistjobs as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName')
                                        ->leftjoin('jmaster as j','j.seekerId','=','sc.seekerId')
                                         ->leftjoin('jqualification as jq','jq.seekerId','=','sc.seekerId')
                                          ->leftjoin('_qualification as q','q.qualificationId','=','jq.qualificationId')
                                         ->leftjoin('jproffessional as jp','jp.seekerId','=','sc.seekerId')
                                         ->leftjoin('_experience as ep','ep.experienceId','=','jp.exprstatus')
                                         ->leftjoin('userlogin as u','u.userId','=','j.userId')
                                         ->where('sc.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();

         $data['shortlist'] = $shortlist;
          
        
 
        return response(view('frontend.myaccount.candidateshortlisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
           public function SearchedCandidates()
     {
         
           $searchcand = DB::table('searched_candidates as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName')
                                        ->leftjoin('jmaster as j','j.seekerId','=','sc.seekerId')
                                         ->leftjoin('jqualification as jq','jq.seekerId','=','sc.seekerId')
                                          ->leftjoin('_qualification as q','q.qualificationId','=','jq.qualificationId')
                                         ->leftjoin('jproffessional as jp','jp.seekerId','=','sc.seekerId')
                                         ->leftjoin('_experience as ep','ep.experienceId','=','jp.exprstatus')
                                         ->leftjoin('userlogin as u','u.userId','=','j.userId')
                                         ->where('sc.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();

         $data['searchcand'] = $searchcand;
 
        return response(view('frontend.myaccount.searchedcandidates', $data),'200')->header('Content-Type', 'text/plain');  
     }
      public function AppliedCandidates()
     {
         
           
           $appliedcandidates = DB::table('userappliedjobs as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName','cb.jobTitle')
                                        ->leftjoin('jmaster as j','j.seekerId','=','sc.seekerId')
                                         ->leftjoin('jqualification as jq','jq.seekerId','=','sc.seekerId')
                                          ->leftjoin('_qualification as q','q.qualificationId','=','jq.qualificationId')
                                         ->leftjoin('jproffessional as jp','jp.seekerId','=','sc.seekerId')
                                         ->leftjoin('_experience as ep','ep.experienceId','=','jp.exprstatus')
                                         ->leftjoin('userlogin as u','u.userId','=','j.userId')
                                          ->leftjoin('companyjobs as cb','cb.jobId','=','sc.jobId')
                                         
                                         ->where('cb.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->get();

         $data['appliedcandidates'] = $appliedcandidates;
        return response(view('frontend.myaccount.appliedcandidates', $data),'200')->header('Content-Type', 'text/plain');  
     }
        public function EditCompanyDeatils(Request $request)
     {
          $data = $request->all();
           $res = DB::update('update comprofile set companyName=?,mobileNumber=?,website=?,industry=?,locationId=?,address=? where companyId=?',array($data,$_SESSION['WHILLO']['COMPAnyID']));
	   if($res){
		   return response()->json(array(
					'success' => true,
					'errors' => "Status successfully changed"
					));
	   }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Failed to change status"
					));
	   }

     }
     

  
}