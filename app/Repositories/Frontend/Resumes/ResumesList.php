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
	public static function getlist($limit = 12, $offset = 1,$keyword="",$locations="")
	{
		$response = array();
		$industry = DB::table('_industry')->select('industryId','industryName')->get(); 
		
			$response=DB::table('jmaster as m')
					->where('m.accountStatus',1)
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->leftjoin('jprofileimage as i', 'i.seekerId', '=', 'm.seekerId')
                                ->leftjoin('jkeyskill as js', 'js.seekerId', '=', 'm.seekerId')
					->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
					->leftjoin('_locations as l', 'p.locationId', '=', 'l.locationId')
                                ->where(function($resume) use ($keyword,$locations)
					  {
						if($locations!="")
						$resume->where('p.locationId','=',$locations);
						
						if($keyword!="")
						$resume->where('js.keyskills','LIKE','%' . $keyword . '%');
                                                  
								
					  })
					->leftjoin('_experience as e', 'jp.exprstatus', '=', 'e.experienceId')
					->select('i.*','p.seekerId','p.firstName','p.lastName','l.locationName','e.experienceName')
					->skip($limit * ($offset -1))
       				->take(12)
					->get();
		
		
		//die(json_encode($response));
		
		
		return $response;
	}
        
        public static function get($limit = 12, $offset = 1,$keyword="",$locations="")
	{
		$response = array();
		$industry = DB::table('_industry')->select('industryId','industryName')->get(); 
		$response['industry'] = $industry;
		foreach ($industry as $key) {
			$response[$key->industryId]=DB::table('jmaster as m')
					->where('m.accountStatus',1)
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->leftjoin('jprofileimage as i', 'i.seekerId', '=', 'm.seekerId')
                                ->leftjoin('jkeyskill as js', 'js.seekerId', '=', 'm.seekerId')
					->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
					->where('jp.industryId',$key->industryId)
					->leftjoin('_locations as l', 'p.locationId', '=', 'l.locationId')
                                ->where(function($resume) use ($keyword,$locations)
					  {
						if($locations!="")
						$resume->where('p.locationId','=',$locations);
						
						if($keyword!="")
						$resume->where('js.keyskills','LIKE','%' . $keyword . '%');
                                                  
								
					  })
					->leftjoin('_experience as e', 'jp.exprstatus', '=', 'e.experienceId')
					->select('i.*','p.seekerId','p.firstName','p.lastName','l.locationName','e.experienceName')
					->skip($limit * ($offset -1))
       				->take(12)
					->get();
		}
		
		//die(json_encode($response));
		
		
		return $response;
	}
    
}