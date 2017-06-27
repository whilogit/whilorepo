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
trait RegisterUserProffessional
{
    use RedirectsUsers;

    public function proffessional(Request $request,Response $response)
    { 
		  $rules = array('industry' => 'required', 'functionalarea' => 'required', 'currentstatus' => 'required','currentstatus' => 'required','preferredlocation'=>'required');
	      $validator = Validator::make($request->all(), $rules); 
		
		   if ($validator->fails()) {
				return response()->json(array(
						'success' => false,
						'errors' => $validator->getMessageBag()->toArray()
						));
		   }
		   $data = $request->all();  	 
		   $createdDate = date("d-m-Y h:s:i");
		   $user = DB::table('jproffessional')->select('seekerId')
	   								->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])
									->first();
			if($user){  
			 
				DB::update('update jproffessional set 
				 industryId=?,functionalarea=?,currentstatus=?,exprstatus=?,updatedDate=?
				 where seekerId = ?', [$data['industry'],$data['functionalarea'],$data['currentstatus'],$data['expiriencestatus'],$createdDate,$_SESSION['WHILLO']['SEEKERID']]);
				
			}else {
				$res = DB::insert('insert into jproffessional(seekerId,industryId,functionalarea,currentstatus,exprstatus,createdDate) 
	   				values (?,?,?,?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$data['industry'],$data['functionalarea'],$data['currentstatus'],$data['expiriencestatus'],$createdDate));	
			 }
			 
		   DB::table('jexperience')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->delete();
		   
		  
		  if(isset($data['expirience'])){
		   foreach ($data['expirience'] as $item) {
			 DB::insert('insert into jexperience(seekerId,companyName,description,startYear,endYear) 
	   				values (?,?,?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$item['companyname'],$item['description'],$item['startyear'],$item['endyear']));	
			}
		  }
		 
		  DB::table('jfeedbackemails')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->delete();
			
			
			if(isset($data['emails'])){
			foreach ($data['emails'] as $item) {
				 DB::insert('insert into jfeedbackemails(seekerId,EmailId) 
						values (?,?)',array($_SESSION['WHILLO']['SEEKERID'],$item['emailid']));	
			 }
			}
			
			//die(json_encode($data['preferredlocation']));
			
			DB::table('jpreferredlocation')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->delete();
			for($i=0;$i<count($data['preferredlocation']); $i++){
				 DB::insert('insert into jpreferredlocation(seekerId,locationId) 
						values (?,?)',array($_SESSION['WHILLO']['SEEKERID'],$data['preferredlocation'][$i]));
			}
			
			DB::table('jsteps')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->increment('steps');
			
			return response()->json(array(
					'success' => true,
					'errors' => "Proffessional details successfully updated"
					));
			
	}
	
	
}