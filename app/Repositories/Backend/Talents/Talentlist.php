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
    
}