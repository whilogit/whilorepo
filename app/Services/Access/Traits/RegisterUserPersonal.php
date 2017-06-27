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
trait RegisterUserPersonal
{
    use RedirectsUsers;

    public function personal(Request $request,Response $response)
    { 
		  $rules = array('dob' => 'required', 'marital' => 'required','relocate' => 'required', 'shifts' => 'required','vehicle' => 'required');
	      $validator = Validator::make($request->all(), $rules); 
		
		   if ($validator->fails()) {
				return response()->json(array(
						'success' => false,
						'errors' => $validator->getMessageBag()->toArray()
						));
		   }
		   $data = $request->all(); 	 
		  
		    $user = DB::table('jpersonal')->select('seekerId')
	   								->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
									->first();
				//die(json_encode($data))					
									
		     if($user){ 
				
				 DB::update('update jpersonal set 
				 dob = ?,marital=?, relocate=?, shifts=?,vehicle=?,adharcard=?,pancard=?,passport=?
				 where seekerId = ?', [strtotime($data['dob']),$data['marital'],$data['relocate'],$data['shifts'],$data['vehicle'],$data['adharcard'],$data['pancard'],$data['passport'],$_SESSION['WHILLO']['SEEKERID']]);
			}else {
				$res = DB::insert('insert into jpersonal(seekerId,dob,marital,relocate,shifts,vehicle,adharcard,pancard,passport) 
	   				values (?,?,?,?,?,?,?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$data['dob'],$data['marital'],$data['relocate'],$data['shifts'],$data['vehicle'],$data['adharcard'],$data['pancard'],$data['passport']));	
				     
		     }
			
			 DB::table('jsteps')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->increment('steps');
			
			return response()->json(array(
					'success' => true,
					'errors' => "Personal details successfully updated"
					));
			
	}
	
	
}