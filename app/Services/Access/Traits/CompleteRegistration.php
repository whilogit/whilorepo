<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Http\Controllers\CcavenueHelperController;

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
                                       
                                        ->select('j.jobTitle', 'l.locationName','j.lastdate','j.locationId','j.jobId')
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
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName','u.emailAddress')
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
     public  function GetJobDetails(Request $request)
     {
          $data = $request->all();
           $jobdetails = DB::table('companyjobs as j')
                                       
                                        ->select('j.jobTitle','j.lastdate','j.jobId')
                                        
                                         ->where('j.jobId', '=',$data['job_id'])
                                        ->first();
           
                  
                return response()->json(array(
                                                    'success' => true,
                                                     'jdetails'=>$jobdetails,
                                                    'errors' => "Payment completed"
                                                    ));
           
          
          
     }
        public function EditCompanyDeatils(Request $request)
            {
                $data = $request->all();
                $res = DB::table('comprofile')
                    ->where('companyId',$_SESSION['WHILLO']['COMPAnyID'] )
                    ->update(array('website' =>"".$data['website']."",
                            'mobileNumber'=>$data['mobileNumber'],
                            'industry'=>$data['industry'],
                            'locationId'=>$data['locationId'],
                            'address'=>"".$data['address'].""

                            ));

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
      public function PaymentPlanDetails(Request $request)
            {
                $data = $request->all();
               
                $plan_price= DB::table('_plandetails')
                                        ->select('price')
                                        ->where('plan_id', '=',$data['planId'])
                                        ->first();
                $data['merchant_id'] = \Config::get('constant.MERCHANT_ID');
                $data['amount']= $plan_price->price;
                // $data['amount']= .01;
                $data['working_key']= \Config::get('constant.WORKING_KEY');
                $data['access_code']=\Config::get('constant.ACCESS_CODE');
                $data['order_id']='123456';
                $data['encRequest'] = CcavenueHelperController::encrypt($data['merchant_id'],$data['working_key']);
                $data['redirect_url']=url('/').'/ccavenue/responseurl';
                $data['cancel_url']=url('/').'/ccavenue/cancelurl';
                $data['language']='EN';
              
   $form_style= '<form method="post" id="ccavenu_form" name="ccavenu_form" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
				<input type="hidden" name="encRequest" value="'.$data['encRequest'].'">
				<input type="hidden" name="access_code" value="'.$data['access_code'].'">
				<input type="hidden" name="merchant_id" value="'.$data['merchant_id'].'">
				<input type="hidden" name="order_id" value="'.$data['order_id'].'">
				<input type="hidden" name="amount" value="'.$data['amount'].'">
				<input type="hidden" name="currency" value="INR">
				<input type="hidden" name="redirect_url" value="'.$data['redirect_url'].'">
				<input type="hidden" name="cancel_url" value="'.$data['cancel_url'].'">
				<input type="hidden" name="language" value="EN">
				<input type="submit" value="Submit">
				</form> '   ;                                                                       

              
return $form_style;
              //view('frontend.companyauth.companyplanpayment', $data); 
            }
     public function UpdateJobDetails(Request $request)
     {
           $data = $request->all();
           $res = DB::table('companyjobs')
                    ->where('jobId',$data['jobid'] )
                    ->update(array('jobTitle' =>"".$data['jobtitle']."",
                            'lastdate'=>$data['validtill']
                           
                            ));

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
    
       public function CcavenuResponse(Request $request)
       {
          $data = $request->all();
          dd($data);
       }
       public function CcavenuCancel(Request $request)
       {
           $data = $request->all();
          dd($data);
       }







}