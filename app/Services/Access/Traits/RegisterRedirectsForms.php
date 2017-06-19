<?php

namespace App\Services\Access\Traits;

use App\Events\Frontend\Auth\UserRegistered;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;
use Validator;

use DB;
use Hash;
/**
 * Class RegistersUsers
 * @package App\Services\Access\Traits
 */
trait RegisterRedirectsForms
{
    use RedirectsUsers;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegistrationForm()
    {
      	if(isset($_SESSION['WHILLO']['STATUS'])){ if($_SESSION['WHILLO']['TYPE']=="C")return Redirect::to('company/signup'); 
		$steps = DB::table('userlogin as l')
	  		         ->join('jmaster as m', 'm.userId', '=', 'l.userId')
					 ->join('jsteps as s', 'm.seekerId', '=', 's.seekerId')
                     ->select('s.steps','m.accountStatus')
					 ->where('l.userId', '=', $_SESSION['WHILLO']['USERID'])
					 ->get();
		foreach ($steps as $step){
				if($step->accountStatus == 0){
				switch($step->steps){
					case 1: { 
					        $education = DB::table('jqualification')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->get();
							$qualifiction = DB::table('_qualification')->get();
							$keyskills = DB::table('_keyskill')->get();
							return view('frontend.auth.educational',array("qualifictions"=>$qualifiction))->with(array("education"=>$education, "keyskills"=>$keyskills)); break;}
					case 2: {  
						$personal = DB::table('jpersonal')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->first();
						return view('frontend.auth.personal')->with("personal", $personal); break;}
					case 3: { 
						 $locations = DB::table('_locations')->get();
						 $industry = DB::table('_industry')->get(); 
						 $proffessional = DB::table('jproffessional')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->first();
						 $jexperience = DB::table('jexperience')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->get();
						 $jfeedbackemails = DB::table('jfeedbackemails')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->get();
						 return view('frontend.auth.profesional',array('industry'=>$industry))->with(array("proffessional"=>$proffessional,"experiences"=>$jexperience,"feedbackemails"=>$jfeedbackemails,"locations"=>$locations)); break;}
					case 4: {
						$jprofileimage = DB::table('jprofileimage')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->get(); 
						$jsocialmedia = DB::table('jsocialmedia')->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->first();
						$resume = DB::table('jdocumenttitles as t')->join('jdocument as d','d.docId','=','t.docId')->where('documentId',3)->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->select('t.*')->get();
						$edudocument = DB::table('jdocumenttitles as t')->leftjoin('jdocument as d','d.docId','=','t.docId')->where('documentId',1)->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->select('t.*','d.actualName')->get();
						$profdocument = DB::table('jdocumenttitles as t')->leftjoin('jdocument as d','d.docId','=','t.docId')->where('documentId',2)->where('seekerId', $_SESSION['WHILLO']['SEEKERID'])->select('t.*','d.actualName')->get();
						
						//die(json_encode($jsocialmedia));
					
						return view('frontend.auth.documents')->with(array("jprofileimage"=>$jprofileimage,"jsocialmedia"=>$jsocialmedia,"resumes"=>$resume,"edudocument"=>$edudocument,"profdocument"=>$profdocument)); break;	
					}
					case 5:{
						$jprofile = DB::table('jprofile as p')->where('p.seekerId', $_SESSION['WHILLO']['SEEKERID'])
														 ->join('jprofileimage as i','i.seekerId','=','p.seekerId')
														 ->join('jmaster as m','m.seekerId','=','p.seekerId')
														 ->join('userlogin as l','l.userId','=','m.userId')
														 ->select('p.*','i.*','l.userName','l.emailAddress')						
														 ->get(); 
						//die(json_encode($jprofile));								
						return view('frontend.auth.complete')->with(array("jprofile"=>$jprofile)); break;
					}
					}
				}else return Redirect::to('myaccount'); 
					
			}
		}
		else{ 
			$location = DB::table('_locations')->get();  
			return view('frontend.auth.register')->with("locations", $location);
		}
    }

    public function showCompanyRegisterForm()
    {
		if(isset($_SESSION['WHILLO']['STATUS'])){ 
			if($_SESSION['WHILLO']['TYPE']=="E")return Redirect::to('auth/signup');
			
			$steps = DB::table('userlogin as l')
	  		         ->join('commaster as m', 'm.userId', '=', 'l.userId')
					 ->join('csteps as c', 'c.companyId', '=', 'm.companyId')
                     ->select('c.steps','m.accountStatus')
					 ->where('l.userId', '=', $_SESSION['WHILLO']['USERID'])
					 ->get();
					 
		foreach ($steps as $step){
			    if($step->accountStatus == 0){ 
				switch($step->steps){
					case 1: { 
					        $companylogo = DB::table('companylogo')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get();
							$companyimages = DB::table('companyimages')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get();// die(json_encode($companyimages));
							return view('frontend.companyauth.companyimages')->with(array("companylogo"=>$companylogo,"companyimages"=>$companyimages)); break;}
					case 2: {  
						
						$commaster = DB::table('commaster as c')
										 ->join('comprofile as p', 'c.companyId', '=', 'p.companyId')
										 ->join('_locations as l', 'l.locationId', '=', 'p.locationId')
										 ->join('userlogin as log', 'log.userId', '=', 'c.userId')
										 ->select('c.*','p.*','l.locationName','log.userName','log.emailAddress')
										 ->where('c.userId', '=', $_SESSION['WHILLO']['USERID'])
										 ->first(); //die(json_encode($commaster));
						$commaimages = DB::table('companyimages')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get(); 
						$companylogo = DB::table('companylogo')->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])->get();
						return view('frontend.companyauth.completed')->with(array("commaster"=>$commaster,"companyimages"=>$commaimages,"companylogo"=>$companylogo)); break; }
					}
				}else return Redirect::to('myaccount');
		}
			
			
			
		}else{
			$industry = DB::table('_industry')->get(); 
			$location = DB::table('_locations')->get();  
			return view('frontend.companyauth.register')->with(array("locations"=>$location,"industry"=>$industry));
		}
		
	}
	
	
}