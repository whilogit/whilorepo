<?php
namespace App\Repositories\Backend\Talents;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Talentlist extends Controller
{
	public static function getlist($limit = 10, $offset = 1)
	{
		$response = array();
		
		$response['talents']  = DB::table('jmaster as m')
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->leftjoin("jprofileimage as img",'img.seekerId','=','m.seekerId')
					->leftjoin('_locations as l','l.locationId','=','p.locationId')
					->select("p.*","img.imageCategory","img.imageName","img.dirYear","img.dirMonth","img.crTime","img.imgExt","l.locationName")
					->skip($limit * ($offset -1))
       				->take($limit)
					->get();
		
		
	 
	   $response['count'] = ceil(DB::table('jmaster as m')
						  ->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
						  ->count()/10);
	 
	 //die(json_encode($response));
		
		return $response;
	}
                    public static function shortlistcandidate()
        {
                   $response = array();
            $response['company_jobs']  = DB::table('shortlistjobs as sj')
                    ->select('userName','emailAddress','companyName','ShortlistedDate')
					->join('jmaster as j', 'j.seekerId', '=', 'sj.seekerId')
                                          ->join('userlogin as ul', 'ul.userId', '=', 'j.userId')
                                        ->join('comprofile as cp', 'cp.companyId', '=', 'sj.companyId')
                     ->where('sj.Status',0)
					->get();
            return $response;
        }
    
                    public static function hiredcandidate()
        {
                   $response = array();
            $response['company_jobs']  = DB::table('shortlistjobs as sj')
                    ->select('userName','emailAddress','companyName','ShortlistedDate')
					->join('jmaster as j', 'j.seekerId', '=', 'sj.seekerId')
                                          ->join('userlogin as ul', 'ul.userId', '=', 'j.userId')
                                        ->join('comprofile as cp', 'cp.companyId', '=', 'sj.companyId')
                    ->where('sj.Status',1)
					->get();
            return $response;
        }
}