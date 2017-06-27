<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Repositories\Backend\Login\Adminlogin;
use Validator;
use Session;

class DashboardLoginController extends Controller
{
    public function dashboardsignin(Request $request,Response $response)
    {
       $rules = array('email' => 'required|email|min:6','password' => 'required|Min:6');
	   $validator = Validator::make($request->all(), $rules); 
		
	   if ($validator->fails()) {
			return response()->json(array(
					'success' => false,
					'errors' => $validator->getMessageBag()->toArray()
			));
	   }
	   
	   if(Adminlogin::login($request->all())){
		   return response()->json(array(
					'success' => true,
					'errors' => "Login successfully completed"
					));
	   }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Invalid username or password"
					));
	   }
	   
    }
}