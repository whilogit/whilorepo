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
	
	
}