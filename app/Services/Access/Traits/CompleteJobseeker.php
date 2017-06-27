<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

use App\Repositories\Frontend\Mail\Feedbackmail;
use DB;
use Hash;
/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait CompleteJobseeker
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    
    public function jcomplete(Request $request,Response $response)
    {
        DB::update('update jmaster SET accountStatus=?
	   				WHERE seekerId=?',array(1,$_SESSION['WHILLO']['SEEKERID']));
	  
		
		 $fullname = "";
		 
		 $users = DB::table('jprofile')
	   								->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
									->get();
		
		 $emails = DB::table('jfeedbackemails')
	   								->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
									->get();
		$createdDate = date("d-m-Y h:s:i");
		
		
		DB::table('jfeedbacklink')->where('seekerId', '=', $_SESSION['WHILLO']['SEEKERID'])->delete();
		foreach($emails as $get)
		{
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$charactersLength = strlen($characters);
			$randomString = '';
			for ($i = 0; $i < 64; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
			}
			$randomString= date("ymdhis") . "-" . $randomString . "-submit";
			$verificationcode = sprintf("%05d", mt_rand(1, 99999));
			$verificationhash = Hash::make($verificationcode);
			//$verificationhas=1234;
			
			
			$res = DB::insert('insert into jfeedbacklink(feedbackId,seekerId,linkName,VerificationCode,Status,createdDate) 
	   				values (?,?,?,?,?,?)',array($get->feedbackId,$_SESSION['WHILLO']['SEEKERID'],$randomString,$verificationhash,0,$createdDate));
					
			
			
			$message = Feedbackmail::send($users[0]->firstName,$get->EmailId, $randomString);
		 }
		
		return response()->json(array(
					'success' => true,
					'errors' => "Registration successfully completed"
					));
	 }
	
	public function ccomplete(Request $request,Response $response)
    {
        DB::update('update commaster SET accountStatus=?
	   				WHERE companyId=?',array(1,$_SESSION['WHILLO']['COMPAnyID']));
	  
		return response()->json(array(
					'success' => true,
					'errors' => "Registration successfully completed"
					));
	 }
	
}