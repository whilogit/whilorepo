<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Repositories\Frontend\Jobs\Joblist;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class JobController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
	
	
	public function companylogo($category,$year,$month,$name,$time,$size,$ext)
    {
		header('Content-type: image/jpeg'); 
		 die(file_get_contents(app_path() . "/Storage/Images/$category/$year/$month/$year" . "_" . $month . "_" . $time ."_" . $name . "_" . $size ."." . $ext));
	}
	
    public function index($limit = 10, $offset = 1)
    {
			$count = ceil(DB::table('companyjobs')->where('status',1)->count() / 10);  
			return view('frontend.joblist')->with(array("joblist"=>Joblist::get(), "count"=>$count));
    }
	
	public function searchjobjoblist($keyword,$locations)
    {
			$count = ceil(DB::table('companyjobs as j')
					->leftjoin('companylogo as li', 'li.companyId', '=', 'j.companyId')
					->join('comprofile as com', 'com.companyId', '=', 'j.companyId')
					->join('_experience as e', 'e.experienceId', '=', 'j.experienceId')
					->join('_locations as l', 'l.locationId', '=', 'j.locationId')
					->where(function($resume) use ($keyword,$locations)
					  {
						if($locations!="")
						$resume->where('l.locationId','=',$locations);
						
						if($keyword!="")
						$resume->where('j.jobTitle','LIKE','%' . $keyword . '%'); 
								
					  })
					  ->where('j.status',1)->count() / 10);  
			return view('frontend.joblist')->with(array("joblist"=>Joblist::get(10,1,$keyword,$locations), "count"=>$count));
    }
	
	

	public function jobdetails($jobid)
    {
         $jobs = DB::table('companyjobs as j')
					->leftjoin('companylogo as li', 'li.companyId', '=', 'j.companyId')					
					->join('comprofile as com', 'com.companyId', '=', 'j.companyId')
					->join('_experience as e', 'e.experienceId', '=', 'j.experienceId')
					->join('_locations as l', 'l.locationId', '=', 'j.locationId')
					->join('_salaryrange as s', 's.salaryId', '=', 'j.salaryId')
					->join('_functionalarea as f', 'f.functionalId', '=', 'j.functionalId')
					->join('_jobrole as jr', 'jr.jobroleId', '=', 'j.jobroleId')
					->join('_jobrolecategory as rc', 'rc.rolecategoryId', '=', 'jr.rolecategoryId')					
					->join('_educations as edu', 'edu.educationId', '=', 'j.educationId')
					->join('_employmentmode as m', 'm.employmentmodeId', '=', 'j.modeofEmployment')
					->join('_joiningtime as jt', 'jt.joiningtimeId', '=', 'j.joiningtime')
					->where('j.jobId',$jobid)
					->where('j.status',1)
					->leftjoin('userappliedjobs as uaj', 'uaj.jobId', '=', 'j.jobId')
					->select('j.jobId','j.jobTitle','j.jobDescription','j.lastdate','j.keyskills','j.createdDate','com.companyName','com.mobileNumber','com.phone','com.website','e.experienceName','l.locationName','s.salaryName','f.functionalName','rc.rolecategoryName','jr.jobroleName','edu.educationName','m.employmentmodeName','m.employmentmodeName','jt.joiningtimeName','li.logoCategory','li.logoName','li.dirYear','li.dirMonth','li.crTime','li.logExt',DB::raw('count(uaj.jobId) as totalapplied'))					
					->distinct('j.jobId')
					->first();
					
					
		return view('frontend.jobdetails')->with("jobdetails",$jobs);
    }
	public function joblistpagination($offset = 1, $limit = 10)
    {
		return response()->json(array(
					'success' => true,
					'data' => Joblist::get($limit,$offset),
					));
	}
	
}


