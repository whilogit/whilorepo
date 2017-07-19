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
        public static function totalAmount()
        {
            $response['totalAmount'] = DB::select( DB::raw("SELECT ROUND(SUM(amount)) as revenue from payment_tracking where `order_status`='success'") );
            return $response;
        }
        public static function getjoblist()
        {
            $response['company_jobs']  = DB::table('companyjobs as m')
					->join('comprofile as p', 'p.companyId', '=', 'm.companyId')
                                        ->select('p.companyName','m.*')
					->get();
            return $response;
        }
         public static function getpaymentlist()
        {
            $response['company_payments']  = DB::table('payment_tracking as m')
					->join('comprofile as p', 'p.companyId', '=', 'm.companyId')
                                        ->select('p.companyName','m.*')
					->get();
            return $response;
        }
    
}