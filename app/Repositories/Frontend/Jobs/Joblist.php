<?php

namespace App\Repositories\Frontend\Jobs;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class Joblist extends Controller
{
	public static function get($limit = 10, $offset = 1,$keyword="",$locations="")
	{
		$resume =  DB::table('companyjobs as j')
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
					->join('_salaryrange as s', 's.salaryId', '=', 'j.salaryId')
					->join('_functionalarea as f', 'f.functionalId', '=', 'j.functionalId')
					->join('_jobrole as jr', 'jr.jobroleId', '=', 'j.jobroleId')
					->join('_jobrolecategory as rc', 'rc.rolecategoryId', '=', 'jr.rolecategoryId')		
					->join('_educations as edu', 'edu.educationId', '=', 'j.educationId')
					->join('_employmentmode as m', 'm.employmentmodeId', '=', 'j.modeofEmployment')
					->distinct('j.companyId')
					->where('j.status',1)
					->orderBy('j.jobId', 'DESC')
					->skip($limit * ($offset -1))
       				->take(10)
					->select('j.jobId','j.jobTitle','j.keyskills','j.createdDate','com.companyName','e.experienceName','l.locationName','s.salaryName','f.functionalName','rc.rolecategoryName','jr.jobroleName','edu.educationName','m.employmentmodeName','m.employmentmodeName','li.logoCategory','li.logoName','li.dirYear','li.dirMonth','li.crTime','li.logExt')
					
					->get();
					
					return $resume;
	}
    
}