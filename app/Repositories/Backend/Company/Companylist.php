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
	public static function getlist()
	{
		$response = array();
		
		$response['conmpanylist']  = DB::table('commaster as m')
					->join('comprofile as p', 'p.companyId', '=', 'm.companyId')
					->leftjoin("companylogo as logo",'logo.companyId','=','m.companyId')
					->leftjoin('_locations as l','l.locationId','=','p.locationId')
					->select("p.*","logo.*","l.locationName","m.accountStatus")
					->get();
		
	
		
		return $response;
	}
        public static function getlocation()
	{
		$response = array();
		
		$response['locationlist']  = DB::table('_locations')
					
					->get();
		
	
		
		return $response;
	}
    
}