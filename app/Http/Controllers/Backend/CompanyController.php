<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;
use DB;
use Hash;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        public function youtubeVideoList()
         {
             return view('backend.companyvideolist')->with(array("data"=>Companylist::getvideolist()));
         }
         public function approveYoutubeVideo(Request $request,Response $response)
         {
             
             if($request->fnaction=='approve')
             {
                  $status=1;
             }
             else
             {
                 $status=0;
             }
             $video_status=DB::table('company_video_url')->find($request->primaryid);
             $primaryid=$request->primaryid;
             $video_status->status=$status;
                $res = DB::table('company_video_url')
                             ->where('id',$primaryid )
                             ->update(array('status' =>$status));
                  return response()->json(array(
                                                     'success' => true,
                                                     'action' => $request->fnaction, 
                                                    'primaryid' => $request->primaryid
                                                     ));
         }
                 

         public function insertNewCompany(Request $request,Response $response)
          {

             $rules = array('registertype' => 'required', 'companyname' => 'required','username' => 'required', 'email' => 'required','password' => 'required','repassword' => 'required', 'mobile' => 'required|Min:10', 'website' => 'required','industry' => 'required', 'location' => 'required', 'address' => 'required','aboutbio'=>'required');
	   $validator = Validator::make($request->all(), $rules); 
	
	   if ($validator->fails()) {	
			return response()->json(array(
					'success' => false,
					'errors' => $validator->getMessageBag()->toArray()
					));
	   }
	   if($request->input('password')!= $request->input('repassword')){
		   return response()->json(array(
					'success' => false,
					'errors' => "Password and repassword do not match"
					));
	   }
	   $user = DB::table('userlogin')->select('userId')
	   								->where('userName', $request->input('username'))
									->first();
	   if($user){
		     return response()->json(array(
					'success' => false,
					'errors' => "This username already exist"
					));
	   }
	   $user = DB::table('userlogin')->select('userId')
	   							     ->where('emailAddress', $request->input('email'))
									 ->first();
	   if($user){
		     return response()->json(array(
					'success' => false,
					'errors' => "This Email already exist"
					));
	   }
	   $data = $request->all();
	   $createdDate = date("d-m-Y h:s:i");
	   $roleId = 2;
	   $password = Hash::make($data['password']);
	   $res = DB::insert('insert into userlogin (roleId,userName,emailAddress,password,lastlogin) 
	   				values (?,?,?,?,?)',array($roleId,$data['username'],$data['email'],$password,$createdDate));
	   $userId =  DB::getPdo()->lastInsertId();
	   $regId = "WH" . date("Ymdhsi") . "J";
	   $transId = round(microtime(true) * 1000);
	   
	   $res = DB::insert('insert into commaster(userId,RegId,ctypeId,TransactionId,accountStatus,createdDate) 
	   				values (?,?,?,?,?,?)',array($userId,$regId,$data['registertype'],$transId,1,$createdDate));
	   $companyId =  DB::getPdo()->lastInsertId();
	   
	   $res = DB::insert('insert into comprofile(companyId,companyName,mobileNumber,phone,website,industry,aboutbio,locationId,city,pincode,address) 
	   				values (?,?,?,?,?,?,?,?,?,?,?)',array($companyId,$data['companyname'],$data['mobile'],$data['phone'],$data['website'],$data['industry'],$data['aboutbio'],$data['location'],$data['city'],$data['pincode'],$data['address']));
	   
	   $res = DB::insert('insert into companyplan(companyId,plan_id) 
	   				values (?,?)',array($companyId,$data['plan']));
           $res = DB::insert('insert into csteps(companyId,steps) 
	   				values (?,?)',array($companyId,4));
		return response()->json(array(
					'success' => true,
					'errors' => "Registration successfully completed"
					));
	 }
      
	
     }
	
