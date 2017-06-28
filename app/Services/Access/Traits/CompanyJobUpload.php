<?php

namespace App\Services\Access\Traits;

use Illuminate\Http\Request;
use App\Exceptions\GeneralException;
use Laravel\Socialite\Facades\Socialite;
use App\Events\Frontend\Auth\UserLoggedIn;

use Illuminate\Http\Response;
use Validator;

use DB;

/**
 * Class UseSocialite
 * @package App\Services\Access\Traits
 */
trait CompanyJobUpload
{

    public function showCompanyJobuploadForm()
    {
		$defaults = array();
		$defaults['salaryrange'] = DB::table('_salaryrange')->get();
		$defaults['educations'] = DB::table('_educations')->get();
		$defaults['locations'] = DB::table('_locations')->get();
		$defaults['keyskill'] = DB::table('_keyskill')->get();
		$defaults['industry'] = DB::table('_industry')->get();		
		$defaults['functionalarea']= DB::table('_functionalarea')->get();
		$defaults['experience'] = DB::table('_experience')->get();
		$defaults['employmentmode'] = DB::table('_employmentmode')->get();
		$defaults['jobrole'] = DB::table('_jobrole')->get();
		$defaults['jobrolecategory'] = DB::table('_jobrolecategory')->get();
		$defaults['joiningtime'] = DB::table('_joiningtime')->get();
		
		
		
		return view('frontend.company.uploadjob',array("response"=>$defaults));
	}
	
	public function uploadjobs(Request $request,Response $response)
    {
		//$rules = array('jobtitle' => 'required', 'experience' => 'required','joblocation' => 'required', 'lastdate' => 'required','jobdescription' => 'required','shortdescription'=>'required','salary' => 'required', 'industry' => 'required','functionalarea' => 'required', 'rolecategory' => 'required', 'role' => 'required','keyskills'=> 'required', 'education' => 'required','modeofemployeement'=> 'required');
            $rules = array('jobtitle' => 'required');
	   $validator = Validator::make($request->all(), $rules); 
		
	   if ($validator->fails()) {
			return response()->json(array(
					'success' => false,
					'errors' => $validator->getMessageBag()->toArray()
					));
	   }
	   
	   
	   $data = $request->all();
	   $createdDate = date("Y-m-d H:i:s");
	   $status = 1;
          $res = DB::table('companyjobs')->insert(
                                                ['companyId' => $_SESSION['WHILLO']['COMPAnyID'], 
                                                  'jobTitle' => $data['jobtitle'],
                                                  'shortdescription' =>$data['shortdescription'],
                                                  'jobDescription' =>$data['jobdescription'],
                                                   'experienceId' =>$data['experience'],
                                                    'lastdate' => $data['lastdate'],
                                                   'locationId' =>$data['joblocation'],
                                                  'salaryId' => $data['salary'],
                                                   'functionalId'=>$data['functionalarea'],
                                                   'jobroleId' =>$data['role'],
                                                    'educationId'=>$data['education'],
                                                    'modeofEmployment'=>$data['modeofemployeement'],
                                                    'keyskills' =>$data['keyskills'],
                                                   'joiningtime'=>$data['joiningtime'],
                                                   'createdDate'=> $createdDate,
                                                    'status'=>$status
                                                  ]
                                            );
	  
	   $jobId =  DB::getPdo()->lastInsertId();
	  
	  if($jobId != 0){
	 	 return response()->json(array(
					'success' => true,
					'errors' => "Job successfully updated"
					));
	  }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Failed to update jobs"
					));
	  }
	   
	   
	}
	
	
}