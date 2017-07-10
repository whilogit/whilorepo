<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DB;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        javascript()->put([
            'test' => 'it works!',
        ]);
        $jobs=DB::table('companyjobs as j')
                ->select(DB::raw('group_concat(j.jobTitle) as jobtitle'),DB::raw('group_concat(j.jobId) as jobid'),DB::raw('group_concat(sr.salaryName) as salary'),DB::raw('group_concat(em.employmentmodeName) as emplmode'),DB::raw('group_concat(e.experienceName) as expname'),	'li.logoCategory','li.logoName','li.dirYear','li.dirMonth','li.crTime','li.logExt','j.companyId','j.jobId','l.locationName','com.companyName','j.shortDescription','j.jobTitle','j.jobDescription','sr.salaryName','f.functionalName','e.experienceName','com.aboutbio','cp.plan_id','p.planname')
					->leftjoin('companylogo as li', 'li.companyId', '=', 'j.companyId')
					->join('comprofile as com', 'com.companyId', '=', 'j.companyId')
                                        ->leftjoin('companyplan as cp', 'cp.companyId', '=', 'j.companyId')
                                           ->leftjoin('_plantypes as p', 'p.plan_id', '=', 'cp.plan_id')
                 ->leftjoin('_employmentmode as em', 'em.employmentmodeId', '=', 'j.modeofEmployment')
					->join('_experience as e', 'e.experienceId', '=', 'j.experienceId')
					->join('_locations as l', 'l.locationId', '=', 'j.locationId')
                                       ->join('_functionalarea as f', 'f.functionalId', '=', 'j.functionalId')
                                ->join('_salaryrange as sr', 'sr.salaryId', '=', 'j.salaryId')
                                ->where('p.planname','Exclusive Plan')
                        ->where('j.status',1)
                        ->groupBy('j.companyId')
                        ->get();
        //$jobs=DB::table('companyjobs as j')
                $profiles=DB::table('jfeedbacks as jb')
                        ->select('p.firstName','p.lastName','l.locationName','f.functionalName')
					->leftjoin('jfeedbacklink as jf', 'jf.feedbackId', '=', 'jb.feedbackId')
					->join('jprofile as p', 'p.seekerId', '=', 'jf.seekerId')
					
					->join('jmaster as m', 'm.seekerId', '=', 'jf.seekerId')
                                        ->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
                        ->join('_functionalarea as f', 'f.functionalId', '=', 'jp.functionalarea')
                        ->leftjoin('_locations as l', 'l.locationId', '=', 'p.locationId')
					 ->where('m.accountStatus',1)->where('jf.Status',1)
                                                  ->groupBy('jf.seekerId')->get();
                                        // echo '<pre>'; print_r($profiles);
                                          //exit;
  $company=DB::table('companyjobs as j')
          ->leftjoin('commaster as cm', 'cm.companyId', '=', 'j.companyId')
               ->select('li.logoCategory','li.logoName','li.dirYear','li.dirMonth','li.crTime','li.logExt')
					->join('companylogo as li', 'li.companyId', '=', 'j.companyId')
				->where('j.status',1)
           ->where('cm.ctypeId',1)
                        ->groupBy('j.companyId')
                        ->get();
  
  $consultancy=DB::table('companyjobs as j')
          ->leftjoin('commaster as cm', 'cm.companyId', '=', 'j.companyId')
               ->select('li.logoCategory','li.logoName','li.dirYear','li.dirMonth','li.crTime','li.logExt')
					->join('companylogo as li', 'li.companyId', '=', 'j.companyId')
				->where('j.status',1)
           ->where('cm.ctypeId',2)
                        ->groupBy('j.companyId')
                        ->get();
		
        return view('frontend.index')->with("locations",DB::table('_locations')->get() )->with("data",$jobs)->with("profiles",$profiles)->with("company",$company)->with("consultancy",$consultancy);
    }
     public function verifytalent(){ return view('frontend.verifytalent');   }
    
     public function privacypolicy(){ return view('frontend.privacypolicy');   }
   
    public function payroll(){ return view('frontend.static.payroll');   }
    public function trainhire(){ return view('frontend.static.trainhire');   }
    public function campusdrives(){ return view('frontend.static.campus-drives');   }
    public function pricing(){ return view('frontend.static.pricing');   }
    public function employeeverification(){ return view('frontend.static.Employee-Verification');   }
   
    public function databasemanagement(){ return view('frontend.static.Database-Management');   }
    public function aboutus(){ return view('frontend.static.about');   }
public function languagetraining(){ return view('frontend.static.Language-Training');   }
public function corporateleadership(){ return view('frontend.static.Corporate-Leadership-Program');   }

   

 	
    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}


