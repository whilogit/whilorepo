<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\Backend\Company\Companylist;
use App\Repositories\Backend\Talents\Talentlist;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Backend\Company\Approve;
use Validator;

use DB;
use Hash;

class DashboardController extends Controller
{
   
	public function index()
                { 
                    return view('backend.auth.login');  
                    
                }
	public function home()
                { 
                    
                    return view('backend.index')->with(array("data"=>Companylist::totalAmount()));
                }
	public function companylist()
                {  
                    return view('backend.companylist')->with(array("data"=>Companylist::getlist()));  
                    
                }
	public function talentlist()
                {  
                    return view('backend.talentlist')->with(array("data"=>Talentlist::getlist()));
                }
         public  function shortlistcandidate()
                    {
                         return view('backend.shortlist')->with(array("data"=>Talentlist::shortlistcandidate()));
                    }
           public  function hiredcandidate()
                    {
                         return view('backend.hired')->with(array("data"=>Talentlist::hiredcandidate()));
                    }
           public function talentAddView()
           {
                $location = DB::table('_locations')->get();  
               return view('backend.addtalent')->with(array("locations"=>$location));
           }
           public function insertNewTalent(Request $request,Response $response)
           {
               
	   $rules = array('username' => 'required|Min:6', 'email' => 'required','password' => 'required|Min:6', 'repassword' => 'required|Min:6','fname' => 'required', 'mobile' => 'required|Min:10', 'gender' => 'required','location' => 'required', 'address' => 'required', 'aboutbio' => 'required|Min:30');
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
	   $roleId = 1;
	   $password = Hash::make($data['password']);
	   $res = DB::insert('insert into userlogin (roleId,userName,emailAddress,password,lastlogin) 
	   				values (?,?,?,?,?)',array($roleId,$data['username'],$data['email'],$password,$createdDate));
	   $userId =  DB::getPdo()->lastInsertId();
	   $regId = "WH" . date("Ymdhsi") . "J";
	   $transId = round(microtime(true) * 1000);
	   
	   $res = DB::insert('insert into jmaster(userId,RegId,TransactionId,accountStatus,createdDate) 
	   				values (?,?,?,?,?)',array($userId,$regId,$transId,0,$createdDate));
	   $seekerId =  DB::getPdo()->lastInsertId();
	   
	  // die(json_encode($seekerId));
	  $res = DB::insert('insert into jprofile(seekerId,mobileNumber,firstName,lastName,locationId,city,pinCode,address,Gender,shortBio) 
	   				values (?,?,?,?,?,?,?,?,?,?)',array($seekerId,$data['mobile'],$data['fname'],$data['lname'],$data['location'],$data['city'],$data['pincode'],$data['address'],$data['gender'],$data['aboutbio']));
	   
	   $res = DB::insert('insert into jsteps(seekerId,steps) 
	   				values (?,?)',array($seekerId,1));
	  
		
		
		return response()->json(array(
					'success' => true,
					'errors' => "Registration successfully completed"
					));
	 }

         public function approve($id)
                {  
                    return Approve::accept($id); 
                }
      
	
}