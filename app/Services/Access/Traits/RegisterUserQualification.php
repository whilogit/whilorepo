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
trait RegisterUserQualification
{
    use RedirectsUsers;

    public function qualification(Request $request,Response $response)
    { 
		  
		  $rules = array('qualification' => 'required');
	      $validator = Validator::make($request->all(), $rules); 
		
		   if ($validator->fails()) {
				return response()->json(array(
						'success' => false,
						'errors' => $validator->getMessageBag()->toArray()
						));
		   }
		   $data = $request->all(); 	 
		   $createdDate = date("Y-m-d h:s:i");
		   
		    $user = DB::table('jkeyskill')->select('seekerId')
	   								->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
									->first();
			 if($user){ 
				DB::update('update jkeyskill set 
				 keyskills = ?
				 where seekerId = ?', [$data['keyskill'],$_SESSION['WHILLO']['SEEKERID']]);
			  }else {
				$res = DB::insert('insert into jkeyskill(seekerId,keyskills) 
	   				values (?,?)',array($_SESSION['WHILLO']['SEEKERID'],$data['keyskill']));	
			   }
			
		   	   
		   DB::table('jqualification')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->delete();
		  
		   foreach ($data['qualification'] as $item) {
			 DB::insert('insert into jqualification(seekerId,qualificationId,passingYear,courceName,specilizationName,universityName,courcetypeId,createdDate) 
	   				values (?,?,?,?,?,?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$item['qualification'],$item['passingyear'],$item['cources'],$item['specialization'],$item['university'],$item['courcetype'],$createdDate));	
			
			}
		   DB::table('jsteps')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->increment('steps');
		  	return response()->json(array(
					'success' => true,
					'errors' => "Personal details successfully updated"
					));
			
	}
	
	
}