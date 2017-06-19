<?php

namespace App\Repositories\Frontend\Resumes;
use App\Http\Controllers\Controller;


use DB;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class ResumesDetails extends Controller
{
	public static function getdetails($id)
	{
		
		$response = array();
		$response['profile'] =DB::table('jmaster as m')
					->where('m.accountStatus',1)
					->join('jprofile as p', 'p.seekerId', '=', 'm.seekerId')
					->leftjoin('jprofileimage as i', 'i.seekerId', '=', 'm.seekerId')
					->join('jproffessional as jp', 'jp.seekerId', '=', 'm.seekerId')
					->join('userlogin as lg', 'lg.userId', '=', 'm.userId')
					->leftjoin('_locations as l', 'p.locationId', '=', 'l.locationId')
					->leftjoin('_experience as e', 'jp.exprstatus', '=', 'e.experienceId')
					->leftjoin('jkeyskill as k', 'k.seekerId', '=', 'm.seekerId')
					->select('lg.emailAddress','i.*','p.seekerId','p.mobileNumber','p.firstName','p.lastName','l.locationName','p.city','p.pinCode','p.address','p.Gender','p.shortBio','l.locationName','e.experienceName')
					->where('m.seekerId',$id)
       				->get();
		
		$response['qualification'] =  DB::table('jqualification as jq')
		      ->where('jq.seekerId', $id)
			  ->join('_qualification as q','q.qualificationId','=','jq.qualificationId')
			  ->join('jkeyskill as k','k.seekerId','=','jq.seekerId')
			  ->select('jq.passingYear','jq.courceName','jq.specilizationName','jq.universityName','jq.courcetypeId','q.qualificationName','k.keyskills')
			  ->get();
			  
		$response['personal'] =  DB::table('jpersonal as p')
		      ->where('p.seekerId', $id)
			  ->select('p.dob','p.marital','p.relocate','p.shifts','p.vehicle','p.adharcard','p.pancard','p.passport')
			  ->get(); 
			  
		$response['proffessional'] =  DB::table('jproffessional as p')
		      ->where('p.seekerId', $id)
			  ->join('_industry as i','i.industryId','=','p.industryId')
			  ->join('_functionalarea as e','e.functionalId','=','p.functionalarea')
			  ->select('p.currentstatus','p.exprstatus','i.industryName','e.functionalName')
			  ->get();
			  
      $response['feedbackemails'] = DB::table('jfeedbackemails as e')
		      ->where('e.seekerId', $id)
			  ->join('jfeedbacklink as l','l.feedbackId','=','e.feedbackId')
			  ->select('l.feedbackDetails','e.EmailId')
			  ->get();	
			  
	 $response['documents']= DB::table('jdocumenttitles as d')
		      ->where('d.seekerId', $id)
			  ->join('jdocument as dd','dd.docId','=','d.docId')
			  ->join('_documents as s','s.docuementId','=','d.documentId')
			  ->select('dd.*','d.docTitle','d.documentId','s.documentName')
			  ->get(); 		  
		
		
	$response['jexpirinece'] =  DB::table('jexperience')
		      ->where('seekerId', $id)
			  ->select('companyName','description','startYear','endYear')
			  ->get();
		
	$personal = false; $favorite = false;
	if(isset($_SESSION['WHILLO']['COMPAnyID'])){
	$personal =  DB::table('jdocpermision')
								  ->where('seekerId', $id)
								  ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])
								  ->where('status', 1)
								  ->select('status')
								  ->first();
	
	$favorite =  DB::table('addtofavorite')
		      ->where('seekerId', $id)
			  ->where('companyId', $_SESSION['WHILLO']['COMPAnyID'])
			  ->select('seekerId')
			  ->get();
			  }
     if($favorite) $response['favorite'] = true; else $response['favorite'] = false;			  
								  
	if($personal) $response['permission'] = true;else $response['permission'] = false; 							  
			  	  
			  
			  
		//die(json_encode($response));
		
		return $response;
	}
    
}