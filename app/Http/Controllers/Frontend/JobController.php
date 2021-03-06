<?php
namespace App\Http\Controllers\Frontend;

//namespace App\Services\Access\Traits;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\Access\Traits\MailController;
use App\Services\Access\Company\MyJobs;
use App\Repositories\Frontend\Jobs\Joblist;
use Validator;
use DB;
use DateTime;
/**
 * Class ProfileController
 * @package App\Http\Controllers\Frontend
 */
class JobController extends Controller
{
    /**
     * @return mixed
     */
	public function myjobsbypage($page)
	{
		return response()->json(array(
			'success' => true,
			'data' => MyJobs::get(10,$page)
			));
	}
	 
    public function changestatus($id,Request $request)
    {
       $rules = array('status' => 'required');
	   $validator = Validator::make($request->all(), $rules); 
	
	   if ($validator->fails()) {	
			return response()->json(array(
					'success' => false,
					'errors' => "Required fields missing"
					));
	   }
	   
	   $res = DB::update('update companyjobs set status=? where jobId=?',array($request->input('status'),$id));
	   if($res){
		   return response()->json(array(
					'success' => true,
					'errors' => "Status successfully changed"
					));
	   }else {
		   return response()->json(array(
					'success' => false,
					'errors' => "Failed to change status"
					));
	   }
	   
	   
    }
    
	
    
  	public function applyjob(Request $request)
    {
                   
                $jobId = $request->input('jobId');
                
		 
      $companyid = DB::table('companyjobs')->select('companyId')->where('jobId',$jobId)->first();
			$companyid=$companyid->companyId;
                         $userId = DB::table('commaster')->select('userId')->where('companyId',$companyid)->first();
			 $userId=$userId->userId;
         $email = DB::table('userlogin as ul')->select('emailAddress')->where('userId',$userId)->first();
       $createdDate = new DateTime();
		$res = DB::insert('insert into userappliedjobs(seekerId,jobId,appliedDate) 
	   				values (?,?,?)',array($_SESSION['WHILLO']['SEEKERID'],$jobId,$createdDate));
         $to=$email->emailAddress;
         $sub='Test shortlist';
         $message='you are shortlisted';
         $sendmail= MailController::sendmail($to,$sub,$message); 			
		 
		return response()->json(array(
					'success' => true,
					'errors' => "errors"
					));

//print_r($request);
                //return response()->json(array(
					//'success' => true,
					//'data' => $request)
					//);
	}
          public function shortlist(Request $request)
    {
        $seekerId = $request->input('seekerId');
         
            //$userid=$_SESSION['WHILLO']['USERID'];
      
              
					
		$seeker_userid = DB::table('jmaster')->select('userId')->where('seekerId',$seekerId)->first();
			$seeker_userid=$seeker_userid->userId;		
         $email = DB::table('userlogin as ul')->select('emailAddress')->where('userId',$seeker_userid)->first();
         
          $createdDate = new DateTime();
          
   
         $res = DB::insert('insert into shortlistjobs(seekerId,companyId,ShortlistedDate) 
	   				values (?,?,?)',array($seekerId, $_SESSION['WHILLO']['COMPAnyID'],$createdDate));
        $to=$email->emailAddress;
         $sub='Test shortlist';
         $message='you are shortlisted';
         $sendmail= MailController::sendmail($to,$sub,$message); 
         
		
		return response()->json(array(
					'success' => true,
					'errors' => "errors"
					));
   
    }
    
      public function index($limit = 10, $offset = 1)
    {
			$count = ceil(DB::table('companyjobs')->where('status',1)->count()/10);  
			return view('frontend.joblist')->with(array("joblist"=>Joblist::get(), "count"=>$count,"keyword"=>""))->with("locations",DB::table('_locations')->get() );
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
						$resume->where('j.jobTitle','LIKE','%' . $keyword . '%')
                                                ->orWhere('j.keyskills','LIKE','%' . $keyword . '%');
								
					  })
					  ->where('j.status',1)->count() / 10);  
                                         
			return view('frontend.joblist')->with(array("joblist"=>Joblist::get(10,1,$keyword,$locations), "count"=>$count,"keyword"=>$keyword))->with("locations",DB::table('_locations')->get());
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
		$jobapplycheck = DB::table('userappliedjobs')->where('seekerId',$_SESSION['WHILLO']['SEEKERID'])->where('jobId',$jobid)->count();
                       
		return view('frontend.jobdetails')->with("jobdetails",$jobs)->with("jobapplycheck",$jobapplycheck);
    }
    
    public function companylogo($category,$year,$month,$name,$time,$size,$ext)
    {
		header('Content-type: image/jpeg'); 
		 die(file_get_contents(app_path(). "/Storage/Images/$category/$year/$month/$year" . "_" . $month . "_" . $time ."_" . $name . "_" . $size ."." . $ext));
	}
	public function joblistpagination($offset = 1, $limit = 10)
    {
		return response()->json(array(
					'success' => true,
					'data' => Joblist::get($limit,$offset),
					));
	}
        
}
   
