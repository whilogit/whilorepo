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
trait CompanyRegister
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
    public function cregister(Request $request,Response $response)
    {
       //unset($_SESSION['WHILLO']) ;die();
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
	   				values (?,?,?,?,?,?)',array($userId,$regId,$data['registertype'],$transId,0,$createdDate));
	   $companyId =  DB::getPdo()->lastInsertId();
	   
	   $res = DB::insert('insert into comprofile(companyId,companyName,mobileNumber,phone,website,industry,aboutbio,locationId,city,pincode,address) 
	   				values (?,?,?,?,?,?,?,?,?,?,?)',array($companyId,$data['companyname'],$data['mobile'],$data['phone'],$data['website'],$data['industry'],$data['aboutbio'],$data['location'],$data['city'],$data['pincode'],$data['address']));
	   
	   $res = DB::insert('insert into csteps(companyId,steps) 
	   				values (?,?)',array($companyId,1));
	  
		
		$_SESSION['WHILLO']['STATUS']=true;
		$_SESSION['WHILLO']['USERID']=$userId;
		$_SESSION['WHILLO']['COMPAnyID']=$companyId;
		$_SESSION['WHILLO']['TYPE']="C";
		
		return response()->json(array(
					'success' => true,
					'errors' => "Registration successfully completed"
					));
	 }
	
}