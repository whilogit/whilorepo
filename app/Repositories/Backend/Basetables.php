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
         public static function getfunctional()
        {
            
                $response = array();
		
		$response['functional']  = DB::table('_functionalarea')
					
					->get();
		return $response;
        }
          public static function getindustries()
        {
            
                $response = array();
		
		$response['industries']  = DB::table('_industry')
					
					->get();
		return $response;
        }
        
          public static function getjobrole()
        {
            
                $response = array();
		
		$response['jobrole']  = DB::table('_jobrole')
                        ->join('_jobrolecategory', '_jobrolecategory.rolecategoryId', '=', '_jobrole.rolecategoryId')
					
					->get();
		return $response;
        }
          public static function getrolecategory()
        {
            
                $response = array();
		
		$response['rolecategory']  = DB::table('_jobrolecategory')
					
					->get();
		return $response;
        }
          public static function getjoiningtime()
        {
            
                $response = array();
		
		$response['joiningtime']  = DB::table('_joiningtime')
					
					->get();
		return $response;
        }
          public static function getkeyskill()
        {
            
                $response = array();
		
		$response['keyskill']  = DB::table('_keyskill')
					
					->get();
		return $response;
        }
          public static function getqualification()
        {
            
                $response = array();
		
		$response['qualification']  = DB::table('_qualification')
					
					->get();
		return $response;
        }
          public static function getsalaryrange()
        {
            
                $response = array();
		
		$response['salaryrange']  = DB::table('_salaryrange')
					
					->get();
		return $response;
        }
}
