<?php
namespace App\Repositories\Backend;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Basetables extends Controller
{

        public static function getlocation()
	{
		$response = array();
		
		$response['locationlist']  = DB::table('_locations')
					
					->get();
		return $response;
	}
        public static function geteducation()
        {
            
                $response = array();
		
		$response['education']  = DB::table('_educations')
					
					->get();
		return $response;
        }
}
