<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Repositories\Frontend\Resumes\ResumesList;
use App\Repositories\Frontend\Resumes\ResumesDetails;
use App\Repositories\Frontend\Resumes\ResumesPermession;
use App\Repositories\Frontend\Jobs\Joblist;
use DateTime;
use DB;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class ResumeController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function profileimage($category, $year, $month, $name, $time, $size, $ext) {
        header('Content-type: image/jpeg');
        die(file_get_contents(app_path() . "/Storage/Images/$category/$year/$month/$year" . "_" . $month . "_" . $time . "_" . $name . "_" . $size . "." . $ext));
    }

    public function index($limit = 12, $offset = 1) {
        $count = ceil(DB::table('jmaster')->where('accountStatus', 1)->count() / 12);
        return view('frontend.resumelist')->with(array("data" => ResumesList::get(), "count" => $count, "keyword" => ""))->with("locations", DB::table('_locations')->get());
    }

    public function talentdetails($id, $name) {
        $searched_date = new DateTime();
        $date = date('Y-m-d');
        $plan = DB::table('companyplan')->select('plan_id')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->first();
        $plan_id = $plan->plan_id;
        $search = DB::table('searched_candidates')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->where('seekerId', $id)->where('Status', 0)->orWhere('Status', 1)->count();
        $searchtotal = DB::table('searched_candidates')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->where('searched_date', $date)->where('Status', 0)->orWhere('Status', 1)->count();
        $searchlimit = DB::table('_plandetails')->select('cv_access_per_day')->where('plan_id', $plan_id)->first();
        $searchlimit = $searchlimit->detail_value;
        //exit;
        if ($searchtotal <= $searchlimit) {
            if ($search == 0) {
                $res = DB::insert('insert into searched_candidates(seekerId,companyId,plan_id,searched_date) 
                    values (?,?,?,?)', array($id, $_SESSION['WHILLO']['COMPAnyID'], $plan_id, $searched_date));
            }
            $shortlistcheck = DB::table('shortlistjobs')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->where('seekerId', $id)->where('Status', 0)->orWhere('Status', 1)->count();
            ResumesDetails::getdetails($id);
            return view('frontend.resumedetails')->with(array("data" => ResumesDetails::getdetails($id)))->with("shortlistcheck", $shortlistcheck);
        } else {
            return redirect('talents')->with('status', 'Cv search limit exceeded');
        }
    }

    public function permission($id) {
        return ResumesPermession::insert($id);
    }

    public function addfavorite($id) {
        return ResumesPermession::addfavorite($id);
    }

    public function removefavorite($id) {
        return ResumesPermession::removefavorite($id);
    }

    public function downloade($id) {
        return ResumesPermession::downloade($id);
    }

    public function searchtalentlist($keyword, $locations) {
        $count = ceil(DB::table('jmaster as m')
                        ->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
                        ->leftjoin('jprofileimage as i', 'i.seekerId', '=', 'm.seekerId')
                        ->leftjoin('jkeyskill as js', 'js.seekerId', '=', 'm.seekerId')
                        ->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
                        ->leftjoin('_locations as l', 'p.locationId', '=', 'l.locationId')
                        ->where(function($resume) use ($keyword, $locations) {
                            if ($locations != "")
                                $resume->where('p.locationId', '=', $locations);

                            if ($keyword != "")
                                $resume->where('js.keyskills', 'LIKE', '%' . $keyword . '%');
                        })
                        ->where('m.accountStatus', 1)->count() / 12);
        return view('frontend.resumelist1')->with(array("data" => ResumesList::getlist(12, 1, $keyword, $locations), "count" => $count, "keyword" => $keyword))->with("locations", DB::table('_locations')->get());
    }

    public function jobdetails($jobid) {
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
                ->where('j.jobId', $jobid)
                ->where('j.status', 1)
                ->leftjoin('userappliedjobs as uaj', 'uaj.jobId', '=', 'j.jobId')
                ->select('j.jobId', 'j.jobTitle', 'j.jobDescription', 'j.lastdate', 'j.keyskills', 'j.createdDate', 'com.companyName', 'com.mobileNumber', 'com.phone', 'com.website', 'e.experienceName', 'l.locationName', 's.salaryName', 'f.functionalName', 'rc.rolecategoryName', 'jr.jobroleName', 'edu.educationName', 'm.employmentmodeName', 'm.employmentmodeName', 'jt.joiningtimeName', 'li.logoCategory', 'li.logoName', 'li.dirYear', 'li.dirMonth', 'li.crTime', 'li.logExt', DB::raw('count(uaj.jobId) as totalapplied'))
                ->distinct('j.jobId')
                ->first();


        return view('frontend.jobdetails')->with("jobdetails", $jobs);
    }

    public function joblistpagination($offset = 1, $limit = 12) {
        return response()->json(array(
                    'success' => true,
                    'data' => ResumesList::getlist($limit, $offset),
        ));
    }

}
