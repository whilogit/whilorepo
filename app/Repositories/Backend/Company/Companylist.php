<?php
namespace App\Repositories\Backend\Company;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Companylist extends Controller
{
	public static function getlist($limit = 10, $offset = 1)
	{
		$response = array();
		
		$response['conmpanylist']  = DB::table('commaster as m')
					->join('comprofile as p', 'p.companyId', '=', 'm.companyId')
					->leftjoin("companylogo as logo",'logo.companyId','=','m.companyId')
					->leftjoin('_locations as l','l.locationId','=','p.locationId')
					->select("p.*","logo.*","l.locationName","m.accountStatus")
					->skip($limit * ($offset -1))
       				->take($limit)
					->get();
		
		$response['count'] = ceil(DB::table('commaster as m')
						  ->join('comprofile as p', 'p.companyId', '=', 'm.companyId')
						  ->count()/10);
		
		
		return $response;
	}
    
}