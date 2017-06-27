<?php

namespace App\Repositories\Frontend\Resumes;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class ResumesList extends Controller
{
	public static function getlist($limit = 50, $offset = 1)
	{
		$response = array();
		$industry = DB::table('_industry')->select('industryId','industryName')->get(); 
		$response['industry'] = $industry;
		foreach ($industry as $key) {
			$response[$key->industryId]=DB::table('jmaster as m')
					->where('m.accountStatus',1)
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->leftjoin('jprofileimage as i', 'i.seekerId', '=', 'm.seekerId')
					->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
					->where('jp.industryId',$key->industryId)
					->leftjoin('_locations as l', 'p.locationId', '=', 'l.locationId')
					->leftjoin('_experience as e', 'jp.exprstatus', '=', 'e.experienceId')
					->select('i.*','p.seekerId','p.firstName','p.lastName','l.locationName','e.experienceName')
					->skip($limit * ($offset -1))
       				->take($limit)
					->get();
		}
		
		//die(json_encode($response));
		
		
		return $response;
	}
    
}