<?php
namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\Access\Company\MyJobs;

use Validator;
use DB;
/**
 * Class ProfileController
 * @package App\Http\Controllers\Frontend
 */
class JobController extends Controller
{
    /**
     * @return mixed
     */
	public function myjobsbypage($page)
	{
		return response()->json(array(
			'success' => true,
			'data' => MyJobs::get(10,$page)
			));
	}
	 
    public function changestatus($id,Request $request)
    {
       $rules = array('status' => 'required');
	   $validator = Validator::make($request->all(), $rules); 
	
	   if ($validator->fails()) {	
			return response()->json(array(
					'success' => false,
					'errors' => "Required fields missing"
					));
	   }
	   
	   $res = DB::update('update companyjobs set status=? where jobId=?',array($request->input('status'),$id));
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

   
}