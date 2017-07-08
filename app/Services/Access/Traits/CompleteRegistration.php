<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;
use App\Http\Controllers\CcavenueHelperController;
use App\Services\Access\Traits\MailController;
use Illuminate\Pagination\Paginator;
use Redirect;
use DB;
use Hash;
/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait completeRegistration
{
    use RedirectsUsers;
    public function showEpiryPage()
    {
        
         return response(view('frontend.companyauth.planexpiry'));
        
    }
     public function compcomplete(Request $request,Response $response)
    { 
		  
		 $imagecount = DB::table('companyimages')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->count();
		 if($imagecount != 0){
			DB::table('csteps')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->increment('steps');
			return response()->json(array(
					'success' => true,
					'errors' => "Company registration completed"
					));
		 }else {
			 return response()->json(array(
					'success' => false,
					'errors' => "Please uploade the company images"
					));
		 }
			
	}
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
                                        ->paginate(2);
           
          $defaults['locations'] = DB::table('_locations')->get();
            $data=array('jobdetails'=>$jobdetails, 'response'=>$defaults);
        
 
        return response(view('frontend.myaccount.companyjoblisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
      public function GetShorlistedCandidates()
     {
         
          $shortlist = DB::table('shortlistjobs as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName','u.emailAddress','sc.status')
                                        ->leftjoin('jmaster as j','j.seekerId','=','sc.seekerId')
                                         ->leftjoin('jqualification as jq','jq.seekerId','=','sc.seekerId')
                                          ->leftjoin('_qualification as q','q.qualificationId','=','jq.qualificationId')
                                         ->leftjoin('jproffessional as jp','jp.seekerId','=','sc.seekerId')
                                         ->leftjoin('_experience as ep','ep.experienceId','=','jp.exprstatus')
                                         ->leftjoin('userlogin as u','u.userId','=','j.userId')
                                         ->where('sc.companyId', '=', $_SESSION['WHILLO']['COMPAnyID'])
                                        ->paginate(2);

         $data['shortlist'] = $shortlist;
          
        
 
        return response(view('frontend.myaccount.candidateshortlisting', $data),'200')->header('Content-Type', 'text/plain');  
     }
 public function SearchedCandidates()
     {
         
           $searchcand = DB::table('searched_candidates as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName','u.emailAddress','sc.status')
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
     public function CallForInterview(Request $request)
     {
         
         $data = $request->all();
         $buttonid=$data['button_id'];
         $id=$data['seekerId'];
         $to=$data['email_id'];
         $sub='Test Interview Call Subject';
         $message='Interview Test body';
         $sendmail= MailController::sendmail($to,$sub,$message);
         $res = DB::table('searched_candidates')
                    ->where('seekerId',$id )
                    ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'] )
                    ->update(array('status' =>1));
         return response()->json(array(
                                                    'success' => true,
                                                    'buttonid' =>$buttonid,
                                                    'errors' => "No"
                                                    ));
                   
         
     }
        public function CallforApplied(Request $request)
        {

            $data = $request->all();
            $buttonid=$data['button_id'];
            $id=$data['seekerId'];
            $to=$data['email_id'];
            $sub='Test Interview Call Subject';
            $message='Interview Test body';
            $sendmail= MailController::sendmail($to,$sub,$message);
            $res = DB::table('userappliedjobs')
                        ->where('seekerId',$id )
                         ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'] )
                        ->update(array('status' =>1));
            return response()->json(array(
                                                        'success' => true,
                                                        'buttonid' =>$buttonid,
                                                        'errors' => "No"
                                                        ));


        }
        public function ShortListStatus(Request $request)
        {
           
            $data = $request->all();
            $buttonid=$data['button_id'];
            $status_option=$data['status_option']; 
            $id=$data['seekerId'];
            $to=$data['email_id'];
            $sub='Test Selected ';
            $message='Selected Email';
            if($status_option=='selected')
            {
                
                $sendmail= MailController::sendmail($to,$sub,$message);
                $res = DB::table('shortlistjobs')
                            ->where('seekerId',$id )
                            ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'] )
                            ->update(array('email_status' =>1,'status' =>1));
                return response()->json(array(
                                                            'success' => true,
                                                            'buttonid' =>$buttonid,
                                                            'msg' => "Candidate Selected"
                                                            ));
            }
            else if($status_option=='rejected')
            {
                
                $res = DB::table('shortlistjobs')
                            ->where('seekerId',$id )
                            ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'] )
                            ->update(array('email_status' =>0,'status' =>2));
                return response()->json(array(
                                                            'success' => true,
                                                            'buttonid' =>$buttonid,
                                                            'msg' => "Candidate Rejected"
                                                            ));
            }

        }
        public function sendRegistarionMail(Request $request)
        {
             $data = $request->all();
             $to=$data['emailAdd'];
            $sub='Registration Completed';
            $message='This is test for registarion complete email';
            $sendmail= MailController::sendmail($to,$sub,$message);
            $res = DB::table('commaster')
                         ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'] )
                        ->update(array('accountStatus' =>1));
            return response()->json(array(
                                                        'success' => true,
                                                        'errors' => "No"
                                                        ));
            
            
        }
      public function AppliedCandidates()
     {
         
           
           $appliedcandidates = DB::table('userappliedjobs as sc')
                                       
                                        ->select('q.qualificationName','u.userName','j.seekerId','ep.experienceName','cb.jobTitle','u.emailAddress','sc.status')
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
      public function compPasswordChangeForm()
        {
          
           return response(view('frontend.myaccount.changePassword'));
        }
     
     public function changeCompanyPassword(Request $request)
     {
         $oldPassword = $request->oldPassword;
         //Check passwrod exist in DB
         $user = DB::table('userlogin')->where('userId',$_SESSION['WHILLO']['USERID'])->first();
         //Check user password
         if (Hash::check($oldPassword, $user->password)) 
         {
             $newpassword = Hash::make($request->newpassword); 
             
             DB::table('userlogin')
                     ->where('userId',$_SESSION['WHILLO']['USERID'])
                     ->update(['password' => $newpassword]);
             return response()->json(array(
                                                'success' => true,
                                                'msg' => "Password updated successfully"
                                                ));
             
         }
         else {
                        return response()->json(array(
                                                'success' => false,
                                                'msg' => "Wrong password"
                                                ));
                }
       
                  
     }
public function PaymentPlanDetails(Request $request)
            {
                $data = $request->all();
                $createdDate = date("Y-m-d H:i:s");
                 $status = 0;
                $user = DB::table('companyplan')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get();
                if(!$user)
                {
                $res = DB::table('companyplan')->insert(
                                                        ['companyId' =>$data['companyId'], 
                                                        'plan_id' => $data['planId'],    
                                                        'created_at'=> $createdDate,
                                                         'status'=>$status
                                                        ]
                                                    );
               }
               else
               {
                    $res = DB::table('companyplan')
                        ->where('companyId', $data['companyId'])
                        ->update(array('plan_id' =>$data['planId'],
                                'created_at'=>$createdDate,
                                'status'=>$status

                                ));
               }
         
                $t_id=strtotime(date("Y-m-d H:i:s")).$_SESSION['WHILLO']['USERID'];
               
                $plan_price= DB::table('_plandetails')
                                        ->select('price')
                                        ->where('plan_id', '=',$data['planId'])
                                        ->first();
                $merchant_id = \Config::get('constant.MERCHANT_ID');
               // $amount= $plan_price->price;
                $amount= 0.01;
                $working_key= \Config::get('constant.WORKING_KEY');
                $access_code = \Config::get('constant.ACCESS_CODE');
                $order_id = CcavenueHelperController::random_num(6); 
                $redirect_url = url('/').'/ccavenue/responseurl';
                $cancel_url = url('/').'/ccavenue/responseurl';
                $marchant_data = "tid=$t_id&merchant_id=$merchant_id&order_id=$order_id&amount=$amount&currency=INR&redirect_url=$redirect_url&cancel_url=$cancel_url&language=EN";
                $encRequest = CcavenueHelperController::encrypt($marchant_data,$working_key);
              
                $form_style= '<form method="post" id="ccavenu_form" name="ccavenu_form" action="https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction"> 
                    <input type="hidden" name="encRequest" value="'.$encRequest.'">
                    <input type="hidden" name="access_code" value="'.$access_code.'">				
                    </form>';                                                                       

              
                return $form_style; 
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
            $createdDate = date("Y-m-d H:i:s");
          $workingKey=\Config::get('constant.WORKING_KEY');;		//Working Key should be provided here.
	$encResponse= $request->encResp;			//This is the response sent by the CCAvenue Server
	$rcvdString = CcavenueHelperController::decrypt($encResponse,$workingKey);		//Crypto Decryption used as per the specified working key.
	$order_status="";
	$decryptValues=explode('&', $rcvdString);
	$dataSize=sizeof($decryptValues);

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
		if($i==0)
                $data['order_id']=$information[1];
		if($i==1)
                $data['tracking_id']=$information[1];
		if($i==2)
                $data['bank_ref_no']=$information[1];
		if($i==3)
                $data['order_status']=$information[1];
		if($i==5)
                $data['payment_mode']=$information[1];
		if($i==10)
                $data['amount']=$information[1];
	}

	for($i = 0; $i < $dataSize; $i++) 
	{
		$information=explode('=',$decryptValues[$i]);
                
	    	$data['info'][$information[0]] = $information[1];
	}
        $companyid=$_SESSION['WHILLO']['COMPAnyID'];
	$paymentamount=$data['amount'];
        if($data['order_status']=="Success")
	{  
 		//DB::enableQueryLog();
		$res = DB::table('payment_tracking')->insert(
                                                        ['companyId' =>$_SESSION['WHILLO']['COMPAnyID'], 
                                                        'order_id' =>  $data['order_id'],  
							 'tracking_id' =>  $data['tracking_id'], 
							 'bank_ref_no' =>  $data['bank_ref_no'],  
							'order_status' =>  $data['order_status'],  
							'payment_mode' =>  $data['payment_mode'],
							'amount' =>  $data['amount'],                  
                                                        'createdDate'=> $createdDate
                                                        ]);
		  //dd(DB::getQueryLog($res));
	           $plan_details = DB::table('_plandetails as p')
                                       
                                        ->select('p.*','t.planname')
					 ->leftjoin('_plantypes as t','t.plan_id','=','p.plan_id')
                                        ->leftjoin('companyplan as c','c.plan_id','=','p.plan_id')
                                         ->where('c.companyId', '=',$companyid)
                                        ->first();  
		$planamount= $plan_details->price;
		if($planamount ==$paymentamount)
		{     
		        $res = DB::table('commaster')
		                ->where('companyId',$companyid)
		                ->update(array('accountStatus'=>1,
		                        'createdDate'=>$createdDate

		                        ));

			$res = DB::table('companyplan')
		                ->where('companyId',$companyid )
		                ->update(array(
		                        'created_at'=>$createdDate,
		                        'status'=>1,

		                        ));
		$data['info']['plan_name']= $plan_details->planname;
		$data['info']['duration']= $plan_details->duration;
		$data['info']['job_post_limit']= $plan_details->job_post_limit;
		$data['info']['price']=$plan_details->price;
		$data['info']['cv_access_per_day']= $plan_details->cv_access_per_day;
		$data['info']['search_criterion']= $plan_details->search_criterion;
		$planDuration=$plan_details->duration;
                $getExpiryDate = CcavenueHelperController::getExpiryDate($planDuration,$createdDate); 
		$plan_created_date= DB::table('companyplan')
                                        ->select('created_at')
                                         ->where('companyId', '=',$companyid)
                                        ->first();  
		$planstartdate=$plan_created_date->created_at;
                $data['info']['createdDate']=$planstartdate;
                $data['info']['planexpiry']= $getExpiryDate;


     		
       		 return view('frontend.companyauth.planpaymentsucess', $data);
		}
		else
		{
	
		     return view('frontend.companyauth.planpaymentsucess', $data);
		}
        }
       else if($data['order_status']=="Aborted" || $data['order_status']=="Failure")
	{
             return view('frontend.companyauth.planpaymentfailed', $data);
        }
          
        }
       }
