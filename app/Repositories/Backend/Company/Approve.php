<?php
namespace App\Repositories\Backend\Company;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Approve extends Controller
{
	public static function accept($id)
	{
		$result = DB::update('update commaster set accountStatus=1 WHERE companyId=' . $id);
		if($result){
			return response()->json(array(
					'success' => true,
					'errors' => "Company successfully approved"
					));
		}else {
			return response()->json(array(
					'success' => false,
					'errors' => "Failed to update status"
					));
		}
	}
    
}